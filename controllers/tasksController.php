<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */


//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }

    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {
       // $userID = $_SESSION["userID"];
       // $records = todos::findAllById($userID);
        session_start();
           if(key_exists('userID',$_SESSION)) {
               $userID = $_SESSION['userID'];
           } else {

               echo 'you must be logged in to view tasks';
           }
        $userID = $_SESSION['userID'];

        $records = todos::findAllById($userID);

        self::getTemplate('all_tasks', $records);

    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

    public static function create()
    {
        self::getTemplate('addTask');
    }

    public static function addTask()
    {
        session_start();
        if(key_exists('userID',$_SESSION)) {
            $userID = $_SESSION['userID'];
        } else {

            echo 'you must be logged in to view tasks';
        }
        $userID = $_SESSION['userID'];
       // self::getTemplate('addTask');
        echo 'inside addtask';
        $record = new todo();
        $record->owneremail=$_POST['owneremail'];
        $record->ownerid=$userID;
        $record->createddate=$_POST['cdate'];
        $record->duedate=$_POST['ddate'];
        $record->message=$_POST['message'];
        $record->isdone=$_POST['isdone'];
        $record->save();

        echo "done";
        self::getTemplate('index.php?page=tasks&action=all');

    }

    public static function update()
    {
        session_start();
        if(key_exists('userID',$_SESSION)) {
            $userID = $_SESSION['userID'];
        } else {

            echo 'you must be logged in to view tasks';
        }
        $userID = $_SESSION['userID'];
        // self::getTemplate('addTask');
        echo 'inside addtask';
        $records = todos::findOne($_REQUEST['id']);
        $record = new todo();
        $record->id=$records->id;;
        $record->owneremail=$_POST['owneremail'];
        $record->ownerid=$userID;
        $record->createddate=$_POST['cdate'];
        $record->duedate=$_POST['ddate'];
        $record->message=$_POST['message'];
        $record->isdone=$_POST['isdone'];
        $record->save();
        echo "done";
        session_start();
        header('Location: index.php?page=tasks&action=all&id='.$_SESSION["userID"]);
      //  self::getTemplate('index.php?page=tasks&action=all');

    }


    //this is the function to view edit record form
    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('edit_task', $record);

    }

    //this would be for the post for sending the task edit form
    public static function store()
    {


        $record = todos::findOne($_REQUEST['id']);
        $record->body = $_REQUEST['body'];
        $record->save();
        print_r($_POST);

    }

    public static function save() {
        session_start();
        $task = new todo();

        $task->body = $_POST['body'];
        $task->ownerid = $_SESSION['userID'];
        $task->save();

    }

    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        print_r($_POST);

    }

}