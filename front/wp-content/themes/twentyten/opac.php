<?php
/**
 Template Name: OPAC bibliography
 * Salida de Resultados de Busquedas OPAC.
 *
 * Author: Teerapong Kraiamornchai & Jose Antonio Lara Galindo
 * Author URI: http://espabiblio.sourceforge.net/
 *
 * joanlaga@hotmail.com
 *
 *
 */
get_header(); ?>
  
<div id="container">
<div id="content" role="main">

<?php
$_GET['opac'] = stripslashes($_GET['opac']); //jalg	 
		print_r($_GET);
echo "</br>";
		print_r($_post);
?>

<h1 class="page-title">

<?php the_title(); echo " - " . $_GET['opac']. "</br>" ;?> 
<?php _e( 'Busqueda por: ', 'twentyten' ); ?>
<?php echo empty($_GET['type'])? 'title' : $_GET['type']; ?>
</h1>

<?php
	/* Since we called the_post() above, we need to
	 * rewind the loop back to the beginning that way
	 * we can run the loop properly, in full.
	 */
	    $limit = 10; // Page limit
	    $qpage = "&type=" . $_GET['type'];
	    if (0 + $_GET['page'] > 0) 
	      $qpage .= "&start=" . ((-1 + $_GET['page']) * $limit) . "&items=$limit";

	    $path = get_option("obopac_api_path");
	    $response = unserialize(file_get_contents($path . "api/opac.php?keyword=" . urlencode($_GET['opac']) . "{$qpage}"));
	    
	    if (!is_array($response['data'])) { // Failed or not found
	      echo "<div class=\"book-no-item\">Search with keyword '{$_GET['opac']}' get no results.</div>"; 
	    }
	    else {
	      // Paging
	      if ($response['rows'] > $limit) {
	        $page = 0 + $_GET['page'];
	        if ($page == 0) $page = 1;

	        $page_range = 2;
	        
	        $paging = "<span class=\"paging-nav\">Page: ";

	        if ($page > $page_range + 1) {
	          $paging .= "<a href=\"?opac=" . urlencode($_GET['opac']) . "&type=" . urlencode($_GET['type']) . "\"><<</a> .. ";
	        }
	        // Start render from minimal page range
          if ($page - $page_range < 1) 
            $start_paging = 1;
          else 
            $start_paging = $page - $page_range;
          
	        for ($i = $start_paging; $i <= ceil($response['rows'] / $limit); $i++) {
	          if ($i > $page + $page_range) 
	            break;
	          
            if ($page == $i) 
              $paging .= "$i . ";
            else
              $paging .= "<a href=\"?opac=" . urlencode($_GET['opac']) . "&type=" . urlencode($_GET['type']) . "&page=$i\">$i</a> . ";
	        }
	        
	        $paging = substr($paging, 0, -3);

	        if ($page + $page_range < $response['rows'] / $limit)
	          $paging .= " .. <a href=\"?opac=" . urlencode($_GET['opac']) . "&type=" . urlencode($_GET['type']) . "&page=" . ceil($response['rows'] / $limit) . "\"> >> </a>";

	        $paging .= "</span>";
	      }
	      echo $paging;

	      foreach ($response['data'] as $book) {
			 echo "<div class=\"book-item\"> ";

				if($book['cover'] ==  $path . 'media/covers/' ){
// cuando no hay cover
 			     }else{
			        echo " <a href=\"?opac&view={$book['id']}\"><img  src=\"{$book['cover']}\" alt=\"{$book['title']}\" /></a> ";
			        
			     } 

				echo "
				      <table class=\"book-info\">
			        <tr>
			        <td>Titulo:		</td><td><a href=\"?opac&view={$book['id']}\">{$book['title']}</a></td></tr>
			        <tr><td>Autor:		</td><td>{$book['author']}</td></tr>
			        <tr><td>Material:	</td><td>{$book['material']}</td></tr>
			        <tr><td>Coleción:	</td><td>{$book['collection']}</td></tr>
			        <tr><td>Código:		</td><td>{$book['call_no']}</td></tr>
			        </table>
				<hr />
				</div>
			        ";
		      }
   }
	    echo $paging;
?>

</div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>