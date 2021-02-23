<?php 
    $path = '/dir0/dir1/myFile.php';
    $file = 'file1.txt';

    //Return filename
    echo basename($path);
    echo '<br>';

    #Return filename without ext
    echo basename($path, '.php');
    echo '<br>';

    #Return dir name from path
    echo dirname($path);
    echo '<br>';

    #check if file exists
    echo file_exists($file);
    echo '<br>';

    #check abs path
    echo realpath($file);
    echo '<br>';

    #check to see if file
    echo file_exists('test');
    echo '<br>';

    #check if writeable
    echo is_writable($file);
    echo '<br>';

    #check if readable
    echo is_readable($file);
    echo '<br>';

    #get file size
    echo filesize($file);
    echo '<br>';

    #create a directory
    // mkdir('testing');

    #remove dir if empty
    // rmdir('testing');

    #copy file
    // echo copy('file1.txt', 'file3.txt');

    #rename
    // rename('file2.txt', 'myfile.txt');

    #read from file to string
    echo file_get_contents($file);
    echo '<br>';
    
    #write string to file
    // echo file_put_contents($file, 'Goodbye World');
    
    // $current = file_get_contents($file);

    // $current .= ' Goodbye World';

    // file_put_contents($file, $current);
    // echo '<br>';
    // echo file_get_contents($file);
    // echo '<br>';

    #open file for reading
    // $handle = fopen($file, 'r');
    // $data = fread($handle, filesize($file));
    // echo $data;
    // fclose($handle);
    // echo '<br>';

    #open file for writing
    $handle = fopen($file, 'w');
    $txt = "John Wayne\n";
    fwrite($handle, $txt);
    $txt = "Lil Wayne\n";
    fwrite($handle, $txt);
    fclose($handle);
    echo file_get_contents($file);


    
