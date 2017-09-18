<!DOCTYPE HTML>
<html>
    <head>
        <title>&#9776; Nicolas Onofrio</title>
	<meta charset="utf-8" />
        <meta name="viewport" content="user-scalable = yes">
	<link rel="stylesheet" href="css/pdos.css" />
    </head>
    <body>

    <!-- Header -->

    <!-- Content -->
    <div id="content-wrapper">
        <div id="content">
            <div class="container">

                <!-- Get information from URL -->
                <?php
                    // Default
                    $tm = "Mo"; 
                    $cc = "S";
                    $site = "X";
                    $ele = "H";
                    // Read URL
                    if ($_GET["tm"]){
                        $tm = htmlspecialchars($_GET["tm"]);
                    }
                    if ($_GET["cc"]){
                        $cc = htmlspecialchars($_GET["cc"]);
                    }
                    if ($_GET["site"]){
                        $site = htmlspecialchars($_GET["site"]);
                    }
                    if ($_GET["ele"]){
                        $ele = htmlspecialchars($_GET["ele"]);
                    }
                    $tmd = $tm . $cc . "2";
                    // Path to image
                    $pdos = "../images/" .$tmd . "/" . $tm . $cc . "2-" .$ele . "-sub" . $site . ".jpg" ;
                    // Define links 
                    $urltm = "&cc=" . $cc . "&site=" . $site . "&ele=" . $ele;
                    $urlcc = "&tm=" . $tm . "&site=" . $site . "&ele=" . $ele;
                    $urlsite = "&tm=" . $tm . "&cc=" . $cc . "&ele=" . $ele;
                    $urlele = "&tm=" . $tm . "&cc=" . $cc . "&site=" . $site;
                ?>

                <!-- HTML content -->
		<h1>Projected DOS of doped TMDs</h1>

		<div id="pdos">
		<img src="<?php echo $pdos; ?>" alt="PDOS" >

		<p>Select a TM (1), a chalcogen (2), a doping site (3) and a dopant on the periodic table.</p>
		<table class="el-select">
		  <tr>
		    <td>(1) Transition metal</td>
		    <td><a href="pdos-substitutional.php?<?php echo "tm=Mo" . $urltm; ?>" class="<?php echo $tm == "Mo" ? "underline" : "no-underline"; ?>" >Mo</a></td>
		    <td><a href="pdos-substitutional.php?<?php echo "tm=W" . $urltm; ?>" class="<?php echo $tm == "W" ? "underline" : "no-underline"; ?>" >W</a></td>
		  </tr>
		  <tr>
		    <td>(2) Chalcogen</td>
		    <td><a href="pdos-substitutional.php?<?php echo "cc=S" . $urlcc; ?>" class="<?php echo $cc == "S" ? "underline" : "no-underline"; ?>" >S</a></td>
		    <td><a href="pdos-substitutional.php?<?php echo "cc=Se" . $urlcc; ?>" class="<?php echo $cc == "Se" ? "underline" : "no-underline"; ?>" >Se</a></td>
		  </tr>
		  <tr>
		    <td>(3) Substitution</td>
		    <td><a href="pdos-substitutional.php?<?php echo "site=X" . $urlsite; ?>" class="<?php echo $site == "X" ? "underline" : "no-underline"; ?>" >X</a></td>
		    <td><a href="pdos-substitutional.php?<?php echo "site=M" . $urlsite; ?>" class="<?php echo $site == "M" ? "underline" : "no-underline"; ?>" >M</a></td>
		  </tr>
		</table>
		<br />
		<h3><?php echo $tmd . "-" . $ele . "-" . $site . "sub"; ?></h3>
		</div>

                <!-- HTML content / periodic table -->
		<section id="periodic_table">
			<div>
			    <div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=H" . $urlele; ?>" class="<?php echo $ele == "H" ? "underline" : "no-underline"; ?>" >H</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Li" . $urlele; ?>" class="<?php echo $ele == "Li" ? "underline" : "no-underline"; ?>" >Li</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Na" . $urlele; ?>" class="<?php echo $ele == "Na" ? "underline" : "no-underline"; ?>" >Na</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=K" . $urlele; ?>" class="<?php echo $ele == "K" ? "underline" : "no-underline"; ?>" >K</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Rb" . $urlele; ?>" class="<?php echo $ele == "Rb" ? "underline" : "no-underline"; ?>" >Rb</a></div>
			    </div>
			    <div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Be" . $urlele; ?>" class="<?php echo $ele == "Be" ? "underline" : "no-underline"; ?>" >Be</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Mg" . $urlele; ?>" class="<?php echo $ele == "Mg" ? "underline" : "no-underline"; ?>" >Mg</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Ca" . $urlele; ?>" class="<?php echo $ele == "Ca" ? "underline" : "no-underline"; ?>" >Ca</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Sr" . $urlele; ?>" class="<?php echo $ele == "Sr" ? "underline" : "no-underline"; ?>" >Sr</a></div>
			    </div>
			    <div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Sc" . $urlele; ?>" class="<?php echo $ele == "Sc" ? "underline" : "no-underline"; ?>" >Sc</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Y" . $urlele; ?>" class="<?php echo $ele == "Y" ? "underline" : "no-underline"; ?>" >Y</a></div>
			    </div>
			    <div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Ti" . $urlele; ?>" class="<?php echo $ele == "Ti" ? "underline" : "no-underline"; ?>" >Ti</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Zr" . $urlele; ?>" class="<?php echo $ele == "Zr" ? "underline" : "no-underline"; ?>" >Zr</a></div>
			    </div>
			    <div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=V" . $urlele; ?>" class="<?php echo $ele == "V" ? "underline" : "no-underline"; ?>" >V</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Nb" . $urlele; ?>" class="<?php echo $ele == "Nb" ? "underline" : "no-underline"; ?>" >Nb</a></div>
			    </div>
			    <div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Cr" . $urlele; ?>" class="<?php echo $ele == "Cr" ? "underline" : "no-underline"; ?>" >Cr</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Mo" . $urlele; ?>" class="<?php echo $ele == "Mo" ? "underline" : "no-underline"; ?>" >Mo</a></div>
			    </div>
			    <div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Mn" . $urlele; ?>" class="<?php echo $ele == "Mn" ? "underline" : "no-underline"; ?>" >Mn</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Tc" . $urlele; ?>" class="<?php echo $ele == "Tc" ? "underline" : "no-underline"; ?>" >Tc</a></div>
			    </div>
			    <div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Fe" . $urlele; ?>" class="<?php echo $ele == "Fe" ? "underline" : "no-underline"; ?>" >Fe</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Ru" . $urlele; ?>" class="<?php echo $ele == "Ru" ? "underline" : "no-underline"; ?>" >Ru</a></div>
			    </div>
			    <div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Co" . $urlele; ?>" class="<?php echo $ele == "Co" ? "underline" : "no-underline"; ?>" >Co</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Rh" . $urlele; ?>" class="<?php echo $ele == "Rh" ? "underline" : "no-underline"; ?>" >Rh</a></div>
			    </div>
			    <div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Ni" . $urlele; ?>" class="<?php echo $ele == "Ni" ? "underline" : "no-underline"; ?>" >Ni</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Pd" . $urlele; ?>" class="<?php echo $ele == "Pd" ? "underline" : "no-underline"; ?>" >Pd</a></div>
			    </div>
			    <div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Cu" . $urlele; ?>" class="<?php echo $ele == "Cu" ? "underline" : "no-underline"; ?>" >Cu</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Ag" . $urlele; ?>" class="<?php echo $ele == "Ag" ? "underline" : "no-underline"; ?>" >Ag</a></div>
			    </div>
			    <div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Zn" . $urlele; ?>" class="<?php echo $ele == "Zn" ? "underline" : "no-underline"; ?>" >Zn</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Cd" . $urlele; ?>" class="<?php echo $ele == "Cd" ? "underline" : "no-underline"; ?>" >Cd</a></div>
			    </div>
			    <div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=B" . $urlele; ?>" class="<?php echo $ele == "B" ? "underline" : "no-underline"; ?>" >B</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Al" . $urlele; ?>" class="<?php echo $ele == "Al" ? "underline" : "no-underline"; ?>" >Al</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Ga" . $urlele; ?>" class="<?php echo $ele == "Ga" ? "underline" : "no-underline"; ?>" >Ga</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=In" . $urlele; ?>" class="<?php echo $ele == "In" ? "underline" : "no-underline"; ?>" >In</a></div>
			    </div>
			    <div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=C" . $urlele; ?>" class="<?php echo $ele == "C" ? "underline" : "no-underline"; ?>" >C</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Si" . $urlele; ?>" class="<?php echo $ele == "Si" ? "underline" : "no-underline"; ?>" >Si</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Ge" . $urlele; ?>" class="<?php echo $ele == "Ge" ? "underline" : "no-underline"; ?>" >Ge</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Sn" . $urlele; ?>" class="<?php echo $ele == "Sn" ? "underline" : "no-underline"; ?>" >Sn</a></div>
			    </div>
			    <div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=N" . $urlele; ?>" class="<?php echo $ele == "N" ? "underline" : "no-underline"; ?>" >N</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=P" . $urlele; ?>" class="<?php echo $ele == "P" ? "underline" : "no-underline"; ?>" >P</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=As" . $urlele; ?>" class="<?php echo $ele == "As" ? "underline" : "no-underline"; ?>" >As</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Sb" . $urlele; ?>" class="<?php echo $ele == "Sb" ? "underline" : "no-underline"; ?>" >Sb</a></div>
			    </div>
			    <div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=O" . $urlele; ?>" class="<?php echo $ele == "O" ? "underline" : "no-underline"; ?>" >O</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=S" . $urlele; ?>" class="<?php echo $ele == "S" ? "underline" : "no-underline"; ?>" >S</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Se" . $urlele; ?>" class="<?php echo $ele == "Se" ? "underline" : "no-underline"; ?>" >Se</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Te" . $urlele; ?>" class="<?php echo $ele == "Te" ? "underline" : "no-underline"; ?>" >Te</a></div>
			    </div>
			    <div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=F" . $urlele; ?>" class="<?php echo $ele == "F" ? "underline" : "no-underline"; ?>" >F</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Cl" . $urlele; ?>" class="<?php echo $ele == "Cl" ? "underline" : "no-underline"; ?>" >Cl</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Br" . $urlele; ?>" class="<?php echo $ele == "Br" ? "underline" : "no-underline"; ?>" >Br</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=I" . $urlele; ?>" class="<?php echo $ele == "I" ? "underline" : "no-underline"; ?>" >I</a></div>
			    </div>
			    <div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=He" . $urlele; ?>" class="<?php echo $ele == "He" ? "underline" : "no-underline"; ?>" >He</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Ne" . $urlele; ?>" class="<?php echo $ele == "Ne" ? "underline" : "no-underline"; ?>" >Ne</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Ar" . $urlele; ?>" class="<?php echo $ele == "Ar" ? "underline" : "no-underline"; ?>" >Ar</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Kr" . $urlele; ?>" class="<?php echo $ele == "Kr" ? "underline" : "no-underline"; ?>" >Kr</a></div>
		<div><a href="pdos-substitutional.php?<?php echo "ele=Xe" . $urlele; ?>" class="<?php echo $ele == "Xe" ? "underline" : "no-underline"; ?>" >Xe</a></div>
			    </div>
			</div>
		    </section>



            </div>
        </div>
    </div>

    <!-- Footer -->

    </body>
</html>
