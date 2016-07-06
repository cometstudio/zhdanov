<?php

namespace App\Http\Controllers\Panel;

use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Resizer;
use Illuminate\Support\Str;
use App\Models\PanelModel;

class ActionsController extends Controller
{
    // A model name obtained from the route
    protected $modelName;
    // The model object
    protected $model;
    // An id obtained from the route
    protected $id = 0;

    /**
     * An action router
     * @param Request $request
     * @param $action
     * @param $modelName
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function act(Request $request, $action, $modelName, $id = 0)
    {
        $this->modelName = $modelName;
        $this->id = $id;

        switch($action){
            case 'show':
                return $this->show();
            break;
            case 'create':
                return $this->create();
            break;
            case 'edit':
                return $this->edit();
            break;
            case 'imageadd':
                return $this->addImage($request);
            break;
            case 'imagedrop':
                return $this->dropImage($request);
            break;
            case 'save':
                return $this->save($request);
            break;
            case 'drop':
                return $this->drop();
            break;
        }

        throw new NotFoundHttpException;
    }

    private function checkAccess(PanelModel $panelModel, $accessType = '')
    {
        if(!Auth::user()->hasAccess($panelModel, $accessType)) throw new \Exception('No access');
    }

    /**
     * Show a list of model items
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    protected function show()
    {
        $panelModels = PanelModel::all();

        $model = $this->factoryModel($this->modelName);

        $currentPanelModel = $this->getPanelModel($model);

        $this->checkAccess($currentPanelModel, 'r');

        $items = $model::orderBy('id', 'DESC')->get();

        return view('panel.show.index', compact('panelModels', 'currentPanelModel', 'items'));
    }

    /**
     * Create a new model item
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    protected function create()
    {
        $panelModels = PanelModel::all();

        $item = $this->factoryModel($this->modelName);

        $currentPanelModel = $this->getPanelModel($item);

        $this->checkAccess($currentPanelModel, 'c');

        $options = $this->getOptions($item);

        return view('panel.edit.'.camel_case($this->modelName), compact('panelModels', 'currentPanelModel', 'item', 'options'));
    }

    /**
     * Edit model item
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    protected function edit()
    {
        $panelModels = PanelModel::all();

        $model = $this->factoryModel($this->modelName);

        $item = $model::findOrFail($this->id);

        $currentPanelModel = $this->getPanelModel($model);

        $this->checkAccess($currentPanelModel, 'r');

        $options = $this->getOptions($item);

        return view('panel.edit.'.camel_case($this->modelName), compact('panelModels', 'currentPanelModel', 'item', 'options'));
    }

    /**
     * Add an image to the model item
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     * @throws \Throwable
     */
    protected function addImage(Request $request)
    {
        $model = $this->factoryModel($this->modelName);

        $item = $model::findOrNew($this->id);

        if($resizerConfig = Resizer::getConfig()) {

            $name = Str::random(24);

            Resizer::addImage($request->file('_image')->getPathname(), $name, empty($this->id));

            $gallery = Resizer::gallery($request->input('gallery'));

            array_push($gallery, $name);

            $data = $request->all();

            $data['gallery'] = Resizer::galleryString($gallery);

            $item->fill($data);

            $item->touch();

            if (!empty($this->id)) $item->update($data);


        }

        $data = [
            'item'=>$item,
            'imagesDir'=>Resizer::getImagesDir($this->id),
            'currentPanelModel'=>$this->getPanelModel($model),
        ];

        $part = view('panel.edit.galleryItems', $data)->render();

        return response()->json([
            'part'=>$part,
            'gallery'=>$item->gallery
        ]);
    }

    /**
     * Delete an image from the model item
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     * @throws \Throwable
     */
    protected function dropImage(Request $request)
    {
        $model = $this->factoryModel($this->modelName);

        $item = $model::findOrNew($this->id);

        $gallery = Resizer::gallery($request->input('gallery'));

        $index = $request->input('index', 0);

        // Unset element with given index in gallery images array
        if (!empty($gallery[$index])){
            // Delete image file(s) with given index
            Resizer::deleteImages($gallery[$index], empty($this->id));

            unset($gallery[$index]);
        }

        $data = $request->all();

        $data['gallery'] = Resizer::galleryString($gallery);

        $item->fill($data);

        $item->touch();

        if (!empty($this->id)) $item->update($data);

        $data = [
            'item'=>$item,
            'imagesDir'=>Resizer::getImagesDir($this->id),
            'currentPanelModel'=>$this->getPanelModel($model),
        ];

        $part = view('panel.edit.galleryItems', $data)->render();

        return response()->json([
            'part'=>$part,
            'gallery'=>$item->gallery
        ]);
    }

    /**
     * Save model item
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    protected function save(Request $request)
    {
        $model = $this->factoryModel($this->modelName);

        $currentPanelModel = $this->getPanelModel($model);

        $this->checkAccess($currentPanelModel, 'u');

        // Validate input
        if($this->hasValidationRules($model)) $this->validate($request, $model->getValidationRules(), $model->getValidationMessages());

        $data = $request->all();

        if(empty($this->id)) {
            $model->id = $model->create($data)->id;
            
            if($this->hasOptions($model)) $model->setOptions($data);

            // Move gallery images from temporary to the permanent location
            if(array_key_exists('gallery', $data)) Resizer::moveToPermanentLocation($request->input('gallery'));
        }else{
            $item = $model::findOrFail($this->id);

            if($this->hasOptions($item)) $item->setOptions($data);

            $item->fill($data);

            $item->touch();

            $item->update($data);
        }

        return response()->json([ 'location'=>url()->route('admin::act', ['action'=>'show', 'modelName'=>$this->modelName], false) ]);
    }

    /**
     * Delete model item
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    protected function drop()
    {
        $model = $this->factoryModel($this->modelName);

        $currentPanelModel = $this->getPanelModel($model);

        $this->checkAccess($currentPanelModel, 'd');

        $item = $model::findOrFail($this->id);

        $item->delete();

        Resizer::deleteImages($item->gallery);

        return response()->json([ 'location'=>url()->route('admin::act', ['action'=>'show', 'modelName'=>$this->modelName], false) ]);
    }

    /**
     * @param $object \Illuminate\Database\Eloquent\Model
     * @return bool
     */
    private function hasOptions($object)
    {
        return (method_exists($object, 'getOptions') && method_exists($object, 'setOptions')) ? true : false;
    }

    /**
     * @param $object \Illuminate\Database\Eloquent\Model
     * @return array
     */
    private function getOptions($object)
    {
        return method_exists($object, 'getOptions') ? $object->getOptions() : [];
    }

    /**
     * @param $object \Illuminate\Database\Eloquent\Model
     * @return bool
     */
    private function hasValidationRules($object)
    {
        return method_exists($object, 'getValidationRules') ? true : false;
    }
}