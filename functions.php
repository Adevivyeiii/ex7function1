<?php 

/**
 * Echos coffee incredient.
 *
 * @param Type of coffee
 */

function scionmodel($type) {
  if ($type == 'FR-S' || $type == 'FRS' ) {
    echo '<h3>FR-S</h3>
    <p>Engine:<br>
2.0 L 4U-GSE/ FA20H4<br>
200  hp (81 kW) @ 7000 rpm <br>
151 ft·lbf of torque @ 6400 rpm <br>

</p>';}

      else if ($type == 'iA') {
    echo '<h3>iA</h3>
    <p>The iA is a fluctuating model with a possibility of these four engines: <br>
1.3 L ZJ-VE I4 (gasoline)<br>
1.5 L ZY-VE I4 (gasoline)<br>
1.4 L Y4 I4 (diesel)<br>
1.6 L Y6 I4 (diesel)<br>
</p>';
  }

   
  else if ($type == 'iM') {
    echo '<h3>iM</h3>
    <p>	The iA is a fluctuating model with a possibility of these four engines:
Petrol
1.2L 8NR-FTS VVT-iW 1,196 cc (73.0 cu in) turbocharged[32]
1.33L 1NR-FE 1,329 cc (81.1 cu in)
1.5L 1NZ-FE 1,496 cc (91.3 cu in)
1.6L 1ZR-FAE V-matic 1,598 cc (97.5 cu in)
1.8L 2ZR-FAE V-matic 1,797 cc (109.7 cu in)
Diesel
1.4L D-4D 1,398 cc (85.3 cu in)
Hybrid
1.8L VVT-i 1,798 cc (109.7 cu in) petrol with an electric motor
</p>';
  } 

  else if ($type == 'iQ') {
    echo '<h3>xA</h3>
    <p>Engine:<br>
1.3 L DOHC I4 <br>
94 hp (70 kW) @ 6000 rpm <br>
89 ft·lbf (121 Nm) of torque <br>
<strong>Also:</strong> contains eleven airbags!
</p> ';
  }  else if ($type == 'tC') {
    echo '<h3>xA</h3>
    <p>Engine:<br>
 2.4 L Dual Overhead Cam (DOHC) 16-valve 4-cylinder with VVT-i, compression ratio of 9.6:1 for the 2005/06 models and 9.8:1 for 2007-2010.<br>
 161 hp (120 kW) @ 6000 rpm (2007MY+) / 160 hp (119 kW) @ 5700 rpm (2005-06MY)<br>
 162 lb·ft (220 N·m) @ 4000rpm (2007MY+) / 163 lb·ft (221 N·m) @ 4000 rpm (2005-06MY)<br>

</p>';
  }
  else if ($type == 'xA') {
    echo '<h3>xA</h3>
    <p>Engine:<br>
1.5 L DOHC I4 engine.<br>
108 hp (81 kW) @ 6000 rpm (revised to 103 SAE net horsepower in 2006)<br>
105 ft·lbf (142 Nm) of torque @ 4200 rpm (revised to 101 lb·ft (137 N·m) in 2006)<br>

</p>';
  }
  else if ($type == 'xB') {
    echo '<h3>xB</h3>
    <p>Engine:<br>   
1.5 L DOHC I4 engine.<br>
108 hp (81 kW) @ 6000 rpm <br>
105 ft·lbf (142 Nm) of torque @ 4200 rpm <br>

</p>';
  }  
  else if ($type == 'xD') {
    echo '<h3>xD</h3>
    <p>Engine:<br>
1.8 L DOHC 2ZR-FE<br>
128 hp (95kW)<br>
125 ft·lbf (169 Nm) of torque<br>

</p>';
  }

  else {
    echo '<h3>This is not a Scion!</h3>
    <p> I have no clue what you&rsquo;re packing under the hood.
</p>';
  }
}