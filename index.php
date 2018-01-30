<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>{{ $page_title or "AdminLTE Dashboard" }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset("/bower_components/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset("/bower_components/admin-lte/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">

      <!-- Header -->
      @include('header')

      <!-- Sidebar -->
      @include('sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            {{ $page_title or "Page Title" }}
            <small>{{ $page_description or null }}</small>
          </h1>
          <!-- You can dynamically generate breadcrumbs here -->
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">          
          <!-- Your Page Content Here -->
          @yield('content')
		  <?php 
		  
			$name = 'customZip';
			$details = array( 
				 array(
				  'path' 		=> 'E:\work\settings.php',
				  'name' 		=> 'test',
				  'extension'  	=> 'abc'   // This should make a file name main.html 
				 ),
				 array(
				  'path' => 'E:\work\ptnkot\juicy\wp-content\themes\kleo\assets\css\combined-and-fonts.min.css',
				  'name' => 'combined'  // This should make a file name core.png
				 ),
				 array(
				  'path' => 'E:\work\el\test.php' // This should make a file name custom.js
				 )
			);	

            $nestedDetails = array(
			  array(
			    'name' => 'customZip',
				'details' => array(
					 array(
					  'path' 		=> 'E:\work\settings.php',
					  'name' 		=> 'test',
					  'extension'  	=> 'abc'   // This should make a file name main.html 
					 ),
					 array(
					  'path' => 'E:\work\ptnkot\juicy\wp-content\themes\kleo\assets\css\combined-and-fonts.min.css',
					  'name' => 'combined'  // This should make a file name core.png
					 ),
					 array(
					  'path' => 'E:\work\el\test.php' // This should make a file name custom.js
					 )				
				)
			  ),
			  array(
			    'name' => 'vivek',
				'details' => array(
					 array(
					  'path' 		=> 'E:\work\settings.php',
					  'name' 		=> 'test',
					  'extension'  	=> 'abc'   // This should make a file name main.html 
					 ),
					 array(
					  'path' => 'E:\work\ptnkot\juicy\wp-content\themes\kleo\assets\css\combined-and-fonts.min.css',
					  'name' => 'combined'  // This should make a file name core.png
					 ),
					 array(
					  'path' => 'E:\work\el\test.php' // This should make a file name custom.js
					 )				
				)
			  ),
			  array(
			    'name' => 'vijay',
				'details' => array(
					 array(
					  'path' 		=> 'E:\work\settings.php',
					  'name' 		=> 'test',
					  'extension'  	=> 'abc'   // This should make a file name main.html 
					 ),
					 array(
					  'path' => 'E:\work\ptnkot\juicy\wp-content\themes\kleo\assets\css\combined-and-fonts.min.css',
					  'name' => 'combined'  // This should make a file name core.png
					 ),
					 array(
					  'path' => 'E:\work\el\test.php' // This should make a file name custom.js
					 )				
				)
			  ),
			  array(
			    'name' => 'sanjeev',
				'details' => array(
					 array(
					  'path' 		=> 'E:\work\settings.php',
					  'name' 		=> 'test',
					  'extension'  	=> 'abc'   // This should make a file name main.html 
					 ),
					 array(
					  'path' => 'E:\work\ptnkot\juicy\wp-content\themes\kleo\assets\css\combined-and-fonts.min.css',
					  'name' => 'combined'  // This should make a file name core.png
					 ),
					 array(
					  'path' => 'E:\work\el\test.php' // This should make a file name custom.js
					 )				
				)
			  )
			);		
			
			/* $detail_nw = array( 
				 array(
				  'path' 		=> 'C:/xamp/test2.php',
				  'name' 		=> 'main_1',
				  'extension'  	=> 'html'   // This should make a file name main.html 
				 ),
				 array(
				  'path' => 'C:/abd.png',
				  'name' => 'core_1'  // This should make a file name core.png
				 ),
				 array(
				  'path' => 'C:/custom_nw.js' // This should make a file name custom.js
				 )
			); */
			
			$allfiles = array();
				
		/* add zip file here*/
function makeZipFile($details, $name){

	$zip = new ZipArchive();
	if ( $zip->open($name.'.zip', ZipArchive::CREATE) !== TRUE) {
		die('Unable to create zip');
		return false;
	}	

	
	foreach($details as $key=>$data){
		
		if(!isset($data['path'])){
			//throw new Exception('Path missing at index '.$key);
		   continue;
		}
		if(!file_exists( $data['path'] )){
		   //throw new Exception('File Missing '.$key);
		   continue;
		}
		if(!isset($data['name'])){
		  $data['name'] = pathinfo($data['path'],PATHINFO_FILENAME);
		}
		if(!isset($data['extension'])){
		  $data['extension'] = pathinfo($data['path'],PATHINFO_EXTENSION);
		}

		$zip->addFile($data['path'], $data['name'] . '.' . $data['extension']);

		
	}
	
	$zip->close();	

    return $name.'.zip';	
}	


function makeNestedZipFile($nestedDetails, $name){

 $zip = new ZipArchive();
 if ( $zip->open($name.'.zip', ZipArchive::CREATE) !== TRUE) {
    die('Unable to create zip');
    return false;
 }	
  
  $tempZipFiles = array();
 
  foreach($nestedDetails as $key=>$value){
	$innerZip = makeZipFile($value['details'], $value['name']);
	$fileName = pathinfo($innerZip, PATHINFO_BASENAME );
    $zip->addFile( $innerZip , $fileName );
    $tempZipFiles[] = $fileName;
  }
 
  $zip->close();

   //Remove temp create zip
   foreach( $tempZipFiles as $temp){
	 unlink($temp);	
   }
   
  
  return $name.'.zip';
}
makeNestedZipFile( $nestedDetails, 'master');
die();

			
			/*foreach($details as $key=>$data){
				
				if(!isset($data['path'])){
					//throw new Exception('Path missing at index '.$key);
				   continue;
				}
				if(!file_exists( $data['path'] )){
				   //throw new Exception('File Missing '.$key);
				   continue;
				}
				if(!isset($data['name'])){
				  $data['name'] = pathinfo($data['path'],PATHINFO_FILENAME);
				}
				if(!isset($data['extension'])){
				  $data['extension'] = pathinfo($data['path'],PATHINFO_EXTENSION);
				}

				$zip->addFile($data['path'], $data['name'] . '.' . $data['extension']);

				
				if(isset($data['extension']) || isset($data['name'])){
					$lastvaluesubstr = substr($data['path'], strrpos($data['path'], '/') + 1);					 
					$getingfile = explode('.',$lastvaluesubstr);					
					
					$filename = $data['name'].'.'.$getingfile['1'];
					$content = "some text here".rand(10,10000000);
					$fp = fopen($_SERVER['DOCUMENT_ROOT'].'/dummyfiles' . "/".$filename,"wb");	
					$file = $_SERVER['DOCUMENT_ROOT'].'\dummyfiles' ."'\'".$filename;
					$filelocation = str_replace("'", "",$file);
					//$allfiles[] = $_SERVER['DOCUMENT_ROOT'].'\test.zip';
					$allfiles[] = 'test2.zip';
					if ($zip->open('test2.zip', ZipArchive::CREATE) === TRUE)
					{
						// Add a file new.txt file to zip using the text specified						
						$zip->addFromString($filelocation, $content);
						// All files are added, so close the zip file.
						$zip->close();
					}					
					fwrite($fp,$content);
					fclose($fp);
				}else{					
					$lastvaluesubstr = substr($data['path'], strrpos($data['path'], '/') + 1);					
					$content = "some text here".rand(1,1000);
					$filename = $lastvaluesubstr;
					$fp = fopen($_SERVER['DOCUMENT_ROOT'].'/dummyfiles' . "/".$filename,"wb");
					$file = $_SERVER['DOCUMENT_ROOT'].'\dummyfiles' ."'\'".$filename;
					$filelocation = str_replace("'", "",$file);
					//$allfiles[] = $_SERVER['DOCUMENT_ROOT'].'\test.zip';
					$allfiles[] = 'test2.zip';
					if ($zip->open('test2.zip', ZipArchive::CREATE) === TRUE)
					{
						// Add a file new.txt file to zip using the text specified
						$zip->addFromString($filelocation, $content);

						// All files are added, so close the zip file.
						$zip->close();
					}
					
					fwrite($fp,$content);
					fclose($fp);
				}
				
				
			}
			
			$zip->close();
			die();
            $z = new ZipArchive();
$z->open('/path/to/your/file.zip');
//Notice the second argument which specifies the local path in the archive
$z->addFile('/path/to/example.jpg', 'images/example.jpg');
*/
			
	/* 		$zip = new ZipArchive;
			foreach($detail_nw as $data){
				if(isset($data['extension']) || isset($data['name'])){
					$lastvaluesubstr = substr($data['path'], strrpos($data['path'], '/') + 1);					 
					$getingfile = explode('.',$lastvaluesubstr);					
					
					$filename = $data['name'].'.'.$getingfile['1'];
					$content = "some text here".rand(10,100);
					$fp = fopen($_SERVER['DOCUMENT_ROOT'].'/dummyfiles' . "/".$filename,"wb");	
					$file = $_SERVER['DOCUMENT_ROOT'].'\dummyfiles' ."'\'".$filename;
					$filelocation = str_replace("'", "",$file);
					//$allfiles[] = $_SERVER['DOCUMENT_ROOT'].'\test1.zip';
					$allfiles[] = 'test3.zip';
					if ($zip->open('test3.zip', ZipArchive::CREATE) === TRUE)
					{
						// Add a file new.txt file to zip using the text specified						
						$zip->addFromString($filelocation, $content);
						// All files are added, so close the zip file.
						$zip->close();
					}					
					fwrite($fp,$content);
					fclose($fp);
				}else{					
					$lastvaluesubstr = substr($data['path'], strrpos($data['path'], '/') + 1);					
					$content = "some text here 3".rand(10,10000);
					$filename = $lastvaluesubstr;
					$fp = fopen($_SERVER['DOCUMENT_ROOT'].'/dummyfiles' . "/".$filename,"wb");
					$file = $_SERVER['DOCUMENT_ROOT'].'\dummyfiles' ."'\'".$filename;
					$filelocation = str_replace("'", "",$file);
					//$allfiles[] = $_SERVER['DOCUMENT_ROOT'].'\test1.zip';
					$allfiles[] = 'test3.zip';
					if ($zip->open('test3.zip', ZipArchive::CREATE) === TRUE)
					{
						// Add a file new.txt file to zip using the text specified
						$zip->addFromString($filelocation, $content);

						// All files are added, so close the zip file.
						$zip->close();
					}					
					fwrite($fp,$content);
					fclose($fp);
				}				
			}	 			
			// ADD FILES TO archive.tar FILE				
			$files = array_unique($allfiles);			
			try
			{
				$a = new PharData('archive.tar');						
				foreach($files as $filename){ 
						$a->addFile($filename);
				}
			} 
			catch (Exception $e) 
			{
				echo "Exception : " . $e;
			}
	*/	
		/* end add zip file here */
			
			
		  ?>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Footer -->
      @include('footer')

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.3 -->
    <script src="{{ asset ("/bower_components/admin-lte/plugins/jQueryUI/jQuery-2.1.3.min.js") }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset ("/bower_components/bootstrap/dist/js/bootstrap.min.js") }}" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset ("/bower_components/admin-lte/dist/js/app.min.js") }}" type="text/javascript"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins. 
          Both of these plugins are recommended to enhance the 
          user experience -->
  </body>
</html><!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>{{ $page_title or "AdminLTE Dashboard" }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset("/bower_components/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset("/bower_components/admin-lte/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">

      <!-- Header -->
      @include('header')

      <!-- Sidebar -->
      @include('sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            {{ $page_title or "Page Title" }}
            <small>{{ $page_description or null }}</small>
          </h1>
          <!-- You can dynamically generate breadcrumbs here -->
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">          
          <!-- Your Page Content Here -->
          @yield('content')
		  <?php 
		  
			$name = 'customZip';
			$details = array( 
				 array(
				  'path' 		=> 'E:\work\settings.php',
				  'name' 		=> 'test',
				  'extension'  	=> 'abc'   // This should make a file name main.html 
				 ),
				 array(
				  'path' => 'E:\work\ptnkot\juicy\wp-content\themes\kleo\assets\css\combined-and-fonts.min.css',
				  'name' => 'combined'  // This should make a file name core.png
				 ),
				 array(
				  'path' => 'E:\work\el\test.php' // This should make a file name custom.js
				 )
			);	

            $nestedDetails = array(
			  array(
			    'name' => 'customZip',
				'details' => array(
					 array(
					  'path' 		=> 'E:\work\settings.php',
					  'name' 		=> 'test',
					  'extension'  	=> 'abc'   // This should make a file name main.html 
					 ),
					 array(
					  'path' => 'E:\work\ptnkot\juicy\wp-content\themes\kleo\assets\css\combined-and-fonts.min.css',
					  'name' => 'combined'  // This should make a file name core.png
					 ),
					 array(
					  'path' => 'E:\work\el\test.php' // This should make a file name custom.js
					 )				
				)
			  ),
			  array(
			    'name' => 'vivek',
				'details' => array(
					 array(
					  'path' 		=> 'E:\work\settings.php',
					  'name' 		=> 'test',
					  'extension'  	=> 'abc'   // This should make a file name main.html 
					 ),
					 array(
					  'path' => 'E:\work\ptnkot\juicy\wp-content\themes\kleo\assets\css\combined-and-fonts.min.css',
					  'name' => 'combined'  // This should make a file name core.png
					 ),
					 array(
					  'path' => 'E:\work\el\test.php' // This should make a file name custom.js
					 )				
				)
			  ),
			  array(
			    'name' => 'vijay',
				'details' => array(
					 array(
					  'path' 		=> 'E:\work\settings.php',
					  'name' 		=> 'test',
					  'extension'  	=> 'abc'   // This should make a file name main.html 
					 ),
					 array(
					  'path' => 'E:\work\ptnkot\juicy\wp-content\themes\kleo\assets\css\combined-and-fonts.min.css',
					  'name' => 'combined'  // This should make a file name core.png
					 ),
					 array(
					  'path' => 'E:\work\el\test.php' // This should make a file name custom.js
					 )				
				)
			  ),
			  array(
			    'name' => 'sanjeev',
				'details' => array(
					 array(
					  'path' 		=> 'E:\work\settings.php',
					  'name' 		=> 'test',
					  'extension'  	=> 'abc'   // This should make a file name main.html 
					 ),
					 array(
					  'path' => 'E:\work\ptnkot\juicy\wp-content\themes\kleo\assets\css\combined-and-fonts.min.css',
					  'name' => 'combined'  // This should make a file name core.png
					 ),
					 array(
					  'path' => 'E:\work\el\test.php' // This should make a file name custom.js
					 )				
				)
			  )
			);		
			
			/* $detail_nw = array( 
				 array(
				  'path' 		=> 'C:/xamp/test2.php',
				  'name' 		=> 'main_1',
				  'extension'  	=> 'html'   // This should make a file name main.html 
				 ),
				 array(
				  'path' => 'C:/abd.png',
				  'name' => 'core_1'  // This should make a file name core.png
				 ),
				 array(
				  'path' => 'C:/custom_nw.js' // This should make a file name custom.js
				 )
			); */
			
			$allfiles = array();
				
		/* add zip file here*/
function makeZipFile($details, $name){

	$zip = new ZipArchive();
	if ( $zip->open($name.'.zip', ZipArchive::CREATE) !== TRUE) {
		die('Unable to create zip');
		return false;
	}	

	
	foreach($details as $key=>$data){
		
		if(!isset($data['path'])){
			//throw new Exception('Path missing at index '.$key);
		   continue;
		}
		if(!file_exists( $data['path'] )){
		   //throw new Exception('File Missing '.$key);
		   continue;
		}
		if(!isset($data['name'])){
		  $data['name'] = pathinfo($data['path'],PATHINFO_FILENAME);
		}
		if(!isset($data['extension'])){
		  $data['extension'] = pathinfo($data['path'],PATHINFO_EXTENSION);
		}

		$zip->addFile($data['path'], $data['name'] . '.' . $data['extension']);

		
	}
	
	$zip->close();	

    return $name.'.zip';	
}	


function makeNestedZipFile($nestedDetails, $name){

 $zip = new ZipArchive();
 if ( $zip->open($name.'.zip', ZipArchive::CREATE) !== TRUE) {
    die('Unable to create zip');
    return false;
 }	
  
  $tempZipFiles = array();
 
  foreach($nestedDetails as $key=>$value){
	$innerZip = makeZipFile($value['details'], $value['name']);
	$fileName = pathinfo($innerZip, PATHINFO_BASENAME );
    $zip->addFile( $innerZip , $fileName );
    $tempZipFiles[] = $fileName;
  }
 
  $zip->close();

   //Remove temp create zip
   foreach( $tempZipFiles as $temp){
	 unlink($temp);	
   }
   
  
  return $name.'.zip';
}
makeNestedZipFile( $nestedDetails, 'master');
die();

			
			/*foreach($details as $key=>$data){
				
				if(!isset($data['path'])){
					//throw new Exception('Path missing at index '.$key);
				   continue;
				}
				if(!file_exists( $data['path'] )){
				   //throw new Exception('File Missing '.$key);
				   continue;
				}
				if(!isset($data['name'])){
				  $data['name'] = pathinfo($data['path'],PATHINFO_FILENAME);
				}
				if(!isset($data['extension'])){
				  $data['extension'] = pathinfo($data['path'],PATHINFO_EXTENSION);
				}

				$zip->addFile($data['path'], $data['name'] . '.' . $data['extension']);

				
				if(isset($data['extension']) || isset($data['name'])){
					$lastvaluesubstr = substr($data['path'], strrpos($data['path'], '/') + 1);					 
					$getingfile = explode('.',$lastvaluesubstr);					
					
					$filename = $data['name'].'.'.$getingfile['1'];
					$content = "some text here".rand(10,10000000);
					$fp = fopen($_SERVER['DOCUMENT_ROOT'].'/dummyfiles' . "/".$filename,"wb");	
					$file = $_SERVER['DOCUMENT_ROOT'].'\dummyfiles' ."'\'".$filename;
					$filelocation = str_replace("'", "",$file);
					//$allfiles[] = $_SERVER['DOCUMENT_ROOT'].'\test.zip';
					$allfiles[] = 'test2.zip';
					if ($zip->open('test2.zip', ZipArchive::CREATE) === TRUE)
					{
						// Add a file new.txt file to zip using the text specified						
						$zip->addFromString($filelocation, $content);
						// All files are added, so close the zip file.
						$zip->close();
					}					
					fwrite($fp,$content);
					fclose($fp);
				}else{					
					$lastvaluesubstr = substr($data['path'], strrpos($data['path'], '/') + 1);					
					$content = "some text here".rand(1,1000);
					$filename = $lastvaluesubstr;
					$fp = fopen($_SERVER['DOCUMENT_ROOT'].'/dummyfiles' . "/".$filename,"wb");
					$file = $_SERVER['DOCUMENT_ROOT'].'\dummyfiles' ."'\'".$filename;
					$filelocation = str_replace("'", "",$file);
					//$allfiles[] = $_SERVER['DOCUMENT_ROOT'].'\test.zip';
					$allfiles[] = 'test2.zip';
					if ($zip->open('test2.zip', ZipArchive::CREATE) === TRUE)
					{
						// Add a file new.txt file to zip using the text specified
						$zip->addFromString($filelocation, $content);

						// All files are added, so close the zip file.
						$zip->close();
					}
					
					fwrite($fp,$content);
					fclose($fp);
				}
				
				
			}
			
			$zip->close();
			die();
            $z = new ZipArchive();
$z->open('/path/to/your/file.zip');
//Notice the second argument which specifies the local path in the archive
$z->addFile('/path/to/example.jpg', 'images/example.jpg');
*/
			
	/* 		$zip = new ZipArchive;
			foreach($detail_nw as $data){
				if(isset($data['extension']) || isset($data['name'])){
					$lastvaluesubstr = substr($data['path'], strrpos($data['path'], '/') + 1);					 
					$getingfile = explode('.',$lastvaluesubstr);					
					
					$filename = $data['name'].'.'.$getingfile['1'];
					$content = "some text here".rand(10,100);
					$fp = fopen($_SERVER['DOCUMENT_ROOT'].'/dummyfiles' . "/".$filename,"wb");	
					$file = $_SERVER['DOCUMENT_ROOT'].'\dummyfiles' ."'\'".$filename;
					$filelocation = str_replace("'", "",$file);
					//$allfiles[] = $_SERVER['DOCUMENT_ROOT'].'\test1.zip';
					$allfiles[] = 'test3.zip';
					if ($zip->open('test3.zip', ZipArchive::CREATE) === TRUE)
					{
						// Add a file new.txt file to zip using the text specified						
						$zip->addFromString($filelocation, $content);
						// All files are added, so close the zip file.
						$zip->close();
					}					
					fwrite($fp,$content);
					fclose($fp);
				}else{					
					$lastvaluesubstr = substr($data['path'], strrpos($data['path'], '/') + 1);					
					$content = "some text here 3".rand(10,10000);
					$filename = $lastvaluesubstr;
					$fp = fopen($_SERVER['DOCUMENT_ROOT'].'/dummyfiles' . "/".$filename,"wb");
					$file = $_SERVER['DOCUMENT_ROOT'].'\dummyfiles' ."'\'".$filename;
					$filelocation = str_replace("'", "",$file);
					//$allfiles[] = $_SERVER['DOCUMENT_ROOT'].'\test1.zip';
					$allfiles[] = 'test3.zip';
					if ($zip->open('test3.zip', ZipArchive::CREATE) === TRUE)
					{
						// Add a file new.txt file to zip using the text specified
						$zip->addFromString($filelocation, $content);

						// All files are added, so close the zip file.
						$zip->close();
					}					
					fwrite($fp,$content);
					fclose($fp);
				}				
			}	 			
			// ADD FILES TO archive.tar FILE				
			$files = array_unique($allfiles);			
			try
			{
				$a = new PharData('archive.tar');						
				foreach($files as $filename){ 
						$a->addFile($filename);
				}
			} 
			catch (Exception $e) 
			{
				echo "Exception : " . $e;
			}
	*/	
		/* end add zip file here */
			
			
		  ?>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Footer -->
      @include('footer')

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.3 -->
    <script src="{{ asset ("/bower_components/admin-lte/plugins/jQueryUI/jQuery-2.1.3.min.js") }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset ("/bower_components/bootstrap/dist/js/bootstrap.min.js") }}" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset ("/bower_components/admin-lte/dist/js/app.min.js") }}" type="text/javascript"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins. 
          Both of these plugins are recommended to enhance the 
          user experience -->
  </body>
</html>