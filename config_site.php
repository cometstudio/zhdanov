<?

// ������������ ���� ������
$config['dbhost']='localhost';
$config['dbname']='tourshop';
$config['dblogin']='rudes_sql';
$config['dbpassword']='2CH11Bat';

// �����
define('DOMAIN', 'tour-shop.ru');
define('MAIN_URL', 'http://'.DOMAIN.'/');
define('ADMIN_URL', 'http://'.DOMAIN.'/admin/');

define('CATALOGUE_PHOTO_ID', 14);
define('PAGE_PHOTO_ID', 15);

// �������� email ��� ����������� ����� 
define('MAIL_FROM', '"������� ������� ��������� �����" <tour-shop.ru@kvmnl01-6100.fornex.org');

extract($_GET);
extract($_POST);
extract($_SERVER);

?>