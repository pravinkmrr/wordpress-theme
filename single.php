<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div data-role="page" id="team" data-theme="g" data-transition="fdivp">
	<div data-role="header" id="header">
<?php $morning=get_metadata("post",$post->ID,"morning",'true'); 
$theaters=explode(',',$morning);
?>
	<h1><?php the_title(); ?></h1>
			<a href="<?php bloginfo('url'); ?>" data-icon="home" title="Home" data-type="button" data-iconpos="notext" class="ui-btn-right" data-theme="g">Home</a>
	</div>
<ul data-role="collapsible-set" data-inset="true">
	<div data-role="collapsible" data-collapsed="true">
		<h2>Morning Show</h2>
		<table style="text-transform: uppercase;">
			<tr> 
				<th>Date</th>
				<th>Screen</th>
				<th>Time</th>
				<th>Film</th>
			</tr>		
		<?php foreach($theaters as $theatre ) {
			echo "<tr>";
			$t=explode('-',$theatre);
				echo "<td>".date("d-m-Y")."</td>";
				echo "<td>".$t[0]."</td>";
				echo "<td>".$t[2]."</td>";
				echo "<td>".$t[3]."</td>";
			echo "</tr>";
			}
		?>
		</table>
	</div>
	<div data-role="collapsible" data-collapsed="true" data-inset="true">
		<h2>Matniee show</h2>
				<table style="text-transform: uppercase;">
			<tr> 
				<th>Date</th>
				<th>Screen</th>
				<th>Time</th>
				<th>Film</th>
			</tr>		
		<?php foreach($theaters as $theatre ) {
			echo "<tr>";
			$t=explode('-',$theatre);
				echo "<td>".date("d-m-Y")."</td>";
				echo "<td>".$t[0]."</td>";
				echo "<td>".$t[2]."</td>";
				echo "<td>".$t[3]."</td>";
			echo "</tr>";
			}
		?>
		</table>
	</div>
	<div data-role="collapsible" data-collapsed="true" data-inset="true">
		<h2>Evening Show</h2>
				<table style="text-transform: uppercase;">
			<tr> 
				<th>Date</th>
				<th>Screen</th>
				<th>Time</th>
				<th>Film</th>
			</tr>		
		<?php foreach($theaters as $theatre ) {
			echo "<tr>";
			$t=explode('-',$theatre);
				echo "<td>".date("d-m-Y")."</td>";
				echo "<td>".$t[0]."</td>";
				echo "<td>".$t[2]."</td>";
				echo "<td>".$t[3]."</td>";
			echo "</tr>";
			}
		?>
		</table>
	</div>
	<div data-role="collapsible" data-collapsed="true" data-inset="true">
		<h2>Night show</h2>
				<table style="text-transform: uppercase;">
			<tr> 
				<th>Date</th>
				<th>Screen</th>
				<th>Time</th>
				<th>Film</th>
			</tr>		
		<?php foreach($theaters as $theatre ) {
			echo "<tr>";
			$t=explode('-',$theatre);
				echo "<td>".date("d-m-Y")."</td>";
				echo "<td>".$t[0]."</td>";
				echo "<td>".$t[2]."</td>";
				echo "<td>".$t[3]."</td>";
			echo "</tr>";
			}
		?>
		</table>
	</div>
</ul>
	<div data-role="footer" data-theme="g">
		<h2> &copy; 2011 ALL RIGHTS RESERVED.</h2>
	</div>	
</div>

<?php endwhile; // end of the loop. ?>
</body>
</html>
