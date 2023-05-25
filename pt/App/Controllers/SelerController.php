<?php
declare(strict_types = 1);

namespace App\Controllers;

use App\Models\Seler;
use Core\View;

class SelerController
{
    public function index()
    {
        $Seler = new Seler('selers');
        $fetchAll = $Seler->index();

        $view = new View();
        $view->render('selers/index', $fetchAll);
    }
    
    public function create()
    {
        $Seler = new Seler('selers');

        if (isset($_POST['submit_create_seler'])) {
            $Seler->create($_POST['name'], $_POST['price']);
	        header('location: ' . URL . 'seler/index');	
        }

        $view = new View();
        $view->render('selers/create');
    }

    public function edit($field_id)
    {
        if (isset($field_id)) {
            $Seler = new Seler('selers');
            $regs = $Seler->edit($field_id);

            if ($regs === false) {
                $msg='Register not found!';
                $error = new \Core\ErrorController();
                $error->index($msg);
            } else {
                $view = new View();
                $view->render('selers/edit', '', $regs);
            }
        } else {
            header('location: ' . URL . 'seler/index');
        }
    }
    // Note that render needs the table name in the plural and the location needs the table name in the singular

    public function update()
    {
        if (isset($_POST['submit_update_seler'])) {
          $Seler = new Seler('selers');
          $Seler->update($_POST['name'], $_POST['price'], $_POST['field_id']);
        }
        header('location: ' . URL . 'seler/index');
    }

    public function delete($field_id)
    {
        if (isset($field_id)) {
            $Seler = new Seler('selers');
            $Seler->delete($field_id);
        }
        header('location: ' . URL . 'seler/index');
    }
    
    public function search()
    {
        if (isset($_GET["submit_search_seler"])) {
            $Seler = new Seler('selers');
            $regs = $Seler->search($_GET['keyword']);

            $view = new View();
            $view->render('selers/search', '', $regs);
        }

        header('location: ' . URL . 'seler/index');
    }    
}
