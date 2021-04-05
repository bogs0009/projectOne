<?php

    // file system - part 1

    // $quotes = readfile('readme.txt');
    // echo $quotes;

    // $file = 'readme.txt';

    // if(file_exists($file)){

        // // read file
        // echo readfile($file) . '<br />';

        // // copy file
        // copy($file, 'quotes.txt');

        // // absolute path
        // echo realpath($file) . '<br />';

        // //file size
        // echo filesize($file) . '<br />';

        // //rename file
        // rename($file, 'test.txt');

    // } else {
    //     echo 'file does not exist';
    // }

    // make directory
    // mkdir('quotes');

    // --- second part ---

    // file system part 2
    // $file = 'quotes.txt';

    // opening a file for reading
    // $handle = fopen($file, 'r');

    // add to writing to a file
    // $handle = fopen($file, 'a+');

    // read the file
    // echo fread($handle, filesize($file));
    // echo fread($handle, 112);

    // read a single line
    // echo fgets($handle);
    // echo fgets($handle);

    // read a single character
    // echo fgetc($handle);
    // echo fgetc($handle);

    // writing to a file
    // fwrite($handle, "\nEverything popular is wrong");

    // fclose($handle);

    // delete file
    // unlink($file);

    //classes yuts 41

    class User {

        private $email;
        private $name;

        public function __construct($name, $email){
            $this->email = $email;
            $this->name = $name;
        }

        public function login(){
            // echo 'the user logged in';
            // --- access --- [10:30]
            echo $this->name . 'logged in';
        }

        public function getname(){
            return $this->name;
        }
        public function setname($name){
            if(is_string($name) && strlen($name) > 1){
                $this->name = $name;
                return "name has been updated to $name";
            } else {
                return 'not a valid name';
            }
        }

    }

    // $userOne = new User();

    // $userOne->login();
    // echo $userOne->email;

    $userTwo = new User('Yoshi', 'yoshi@netninja.co.uk');
    // echo $userTwo->name;
    // echo $userTwo->email;
    
    // $userTwo->login();

    // --- tuts 42 ---
    // echo $userTwo->getName();
    // echo $userTwo->setName(50);
    echo $userTwo->setName('john');
    echo $userTwo->getName();



?>