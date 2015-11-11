<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
echo $_POST['articulo'];
function removeDirectory($path)
{
    $path = rtrim( strval( $path ), '/' ) ;
    
    $d = dir( $path );
    
    if( ! $d )
        return false;
    
    while ( false !== ($current = $d->read()) )
    {
        if( $current === '.' || $current === '..')
            continue;
        
        $file = $d->path . '/' . $current;
        
        if( is_dir($file) )
            removeDirectory($file);
        
        if( is_file($file) )
            unlink($file);
    }
    
    rmdir( $d->path );
    $d->close();
    return true;
}


include_once("bd.php");
$db = new Db();
$folder = "../content/".$_POST['articulo'];
$query = "DELETE FROM articulo WHERE id_articulo = ".$_POST['articulo'];
$result = $db -> query($query);



removeDirectory($folder);


?>
</body>
</html>