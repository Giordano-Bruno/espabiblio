<?php
/**
Template Name: OPAC bibliography
 * Author: Teerapong Kraiamornchai & Jose Antonio Lara Galindo
 * Author URI: http://espabiblio.sourceforge.net/
joanlaga@hotmail.com

 */
get_header();
       $path = get_option("obopac_api_path");
  	    $response = unserialize(file_get_contents($path . "api/opac.php?id=" . (0 + $_GET['view'])));
  	    print_r($_GET);
  	     	    print_r($response);
 ?>
		<div id="container">
			<div id="content" role="main">
<?php
	    if (!is_array($response)) { 
	    echo   "<p>Could not retrieve bibliography.</p>";
	     } ?>
	    <h1 class="page-title"><?php echo $response['title']; ?></h1>
<?php
      if (!empty($response['subtitle'])) 
	      echo "<h4>{$response['subtitle']}</h4>\n";
	    ?>
	    <p id="biblio-top-backlink">
	      <a href="#" onclick="javascript:history.back(); return false;">Back to results</a>
	    </p>
	    <?php
		if (!empty($response['cover']))  { 
				echo 'si cover </br>';
				echo $response['cover'];
			        echo "<div class=\"book-cover\"><img src=\"{$response['cover']}\" alt=\"{$response['title']}\"></div>\n";
			 } else { 
					echo 'no cover';
					echo $response['cover'];
			       		echo "<div class=\"book-cover\"><img src=\"../media/covers/No_foto.png\" alt=\"{$response['title']}\"></div>\n";
		}

        $trans = array(
          'responsibility' => 'Responsabilidad',
          'author' => 'Autor',
          'call_no' => 'Codigo',
          'collection' => 'Colección',
          'material' => 'Material',
        );
	      unset($response['title'], $response['subtitle'], $response['id'], $response['cover']);
	      echo "<table class=\"book-info\">\n";
  	    foreach ($response as $key=>$info) {
  	      if (is_array($info)) continue;
  	      if (empty($info)) continue;
  	      echo "
		<tr>
			<td class=\"label\">" . ($trans[$key] ? $trans[$key] : $key) . "</td>
			<td class=\"info\">" . $info . "</td>
		</tr>\n";
  	    }
  	    echo "</table>\n";
        echo "<h4>Información de la copia bibliográfica: </h4>\n";
        if (is_array($response['copies']) && count($response['copies']) > 0) {
		          echo "<table class=\"book-copies\">\n";
					echo "<tr>";
	        foreach ($response['copies'][0] as $key=>$val) {
		          echo "<th>    " . $key . "       | </th>";
			        }
			        echo "</tr>\n";

    	    foreach ($response['copies'] as $copy) {
    	      if (is_array($copy)) {
	    	        echo "<tr class=\"caption\" >";
   		 	        foreach ($copy as $val) {
								if ($val=='' or $val==' ' ){
			 						echo "<td>         |</td>";
  				    	        } else {
  			  		            echo "<td>" .$val . "</td>";
		    	   		     }
           	        }
		    	        echo "</tr>\n";
	    	      } else {
    	       		 echo "<tr><td>No hay copias</td></tr>";
	    	      }
	    	    }
  	      echo "</table>";
  	    }	else {
		  	      echo "<p>No hay copias</p>";
  	    }

  	    echo "<h4>Descripción del libro</h4>";
  	    echo "<div id=\"marc-info\">";
				if (empty($response['marc'])) {
	  	      echo "<p> No hay informacion </p>";
	  	      	  	      echo "</br>";
	  	      	  	      } else {

  	    foreach ($response['marc'] as $key=>$vals) {
  	      if (!empty($vals['label'])) {
  	        echo "<div class=\"marc-label\"><em>{$vals['label']}</em></div><div class=\"marc-value\">{$vals['value']}</div>";
  	    } else {
  	      echo "<p>No info</p>";
	  	    }
  	    	}
  	    }
  	    echo "</div>";
	    ?>
	    <hr />
	    <a href="#" onclick="javascript:history.back(); return false;">Back</a>
      <?php // } ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
