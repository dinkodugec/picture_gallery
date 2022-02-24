<?php

class Photo extends Db_object

{

    protected static $db_table = "photos";
    protected static $db_table_fields = array('photo_id', 'title', 'description', 'filename', 'type', 'size');
    public $photo_id;
    public $title;
    public $description;
    public $filename;
    public $type;
    public $size;

    public $tmp_path;
    public $upload_directory = "image";
    public $custom_errors = array();
    public $upload_errors_arrays = array(

        UPLOAD_ERR_OK => "There is no error.",
        UPLOAD_ERR_INI_SIZE => "The upload file exceeds the upload_max_filesize directive.",
        UPLOAD_ERR_FORM_SIZE => "The upload file exceeds the upload_max_filesize directive.",
        UPLOAD_ERR_PARTIAL => "The upload file was only partially loaded",
        UPLOAD_ERR_NO_FILE => "No file was uploaded.",
        UPLOAD_ERR_NO_TMP_DIR => "Missing temporary folder.",
        UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk.",
        UPLOAD_ERR_EXTENSION => "A PHP extension stopped the file upload."
    );





}






?>