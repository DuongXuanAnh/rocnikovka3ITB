<?php 
	include('../../modules/Config.php');
	$sql = "SELECT * FROM osvete_meny";
	$query = mysqli_query($conn,$sql);
 ?>
<div class="text mt-3">
	<h2>O světě</h2>
	Mapu známého světa (hlavně Aranského císařství - viz. níže) nejdete na mapě.

     Aran je fantazy svět, který ovládají tři síly: Magie, Technika a Příroda. Každou silou vládne jedna frakce, navzájem se nenávidí a bojují spolu, ale spíše politikou než zbraněmi. Jednotlivá království se vzdala nepřátelských úmyslů a spojila se proti hrozbě zvenčí, proti "Všudypřítomnému nepříteli", Ugům. A tak bylo založeno Aranské císařství, kde se udržuje křehká rovnováha.

     Aranské císařství sjednocené Fesoiem II. zažilo několik desítek let klidu a relativního míru. Po Fesoiově smrti usedla na trůn jeho mladá sličná dcera císařovna Kara. Její vláda je spravedlivá, poddaní ji ctí jako symbol svobody a krásy. Po letech klidu se šíří zemí neklid, tři kasty obyvatelstva spolu začínají soupeřit o nadvládu nad ostatními. Přírodní, kteří žijí v harmonii s přírodou, obviňují magické z kacířství vůči matce přírodě. Magičtí zbrojí proti technickým, jelikož v blízkosti jejich strojů selhává magie. A nakonec jsou tu techničtí, kteří se dohadují s přírodními o devastování přírody jejich vynálezy. Díky Bohům se daří císařovně držet tyto konflikty v mezích, tak aby se z nich nestala občanská válka, která by císařství učinila příliš zranitelným a Nepřítel by zaútočil, což by byl nejspíše konec císařství.
</div>
<div class="text-center mt-3">
	<div class="row">
    <div class="col-lg-8 col-md-12">
      <div class="picture responsive_img">
	  <img src="http://severani.mysteria.cz/aran/obrazky/penize.jpg" class="rounded" alt="Peníze, ceny surovin">
	</div>
    </div>
    <div class="col-lg-4 col-md-12 mt-3">	
	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">1 zlatý</th>
      <th scope="col">10 stříbrných</th>
    </tr>
    <tr>
      <th scope="col">1 stříbrný</th>
      <th scope="col">10 měďáků</th>
    </tr>
    <tr>
      <th scope="col">1 měďák</th>
      <th scope="col">4 čtvrťáky</th>
    </tr>
  </thead>
</table>
    </div>
  </div>
  <div class="row">
  	<div class="col-lg-12 mt-5">
  		<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Věc</th>
      <th scope="col">Cena</th>
      <th scope="col">Popis</th>
      <th scope="col">Vzhled</th>
    </tr>
  </thead>
  <tbody>
  	<?php while($radek = mysqli_fetch_array($query)){ ?>
    <tr>
      <th><?php echo $radek['vec']; ?></th>
      <td><?php echo $radek['cena']; ?></td>
      <td><?php echo $radek['popis']; ?></td>
      <td><?php echo $radek['vzhled']; ?></td>
    </tr>
	<?php } ?>
  </tbody>
</table>
  	</div>
  </div>

  </div>


