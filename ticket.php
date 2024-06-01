<?php 
   $page_title = 'Bus Ticket System';
   include ('./ticket_header.html');
?>

<body>
  <div class="header">
    <h1>Bus Ticket System</h1>
  </div>

  <table class="container">
    <thead>
      <tr>
        <th rowspan="2">Day</th>
        <th colspan="5">Departure time</th>
      </tr>
      <tr>
        <td>7:00</td>
        <td>10:00</td>
        <td>13:00</td>
        <td>16:00</td>
        <td>21:00</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Saturday</td>
        <td>RM 8</td>
        <td>RM 8</td>
        <td>RM 8</td>
        <td>RM 8</td>
        <td>RM 6</td>
      </tr>
      <tr>
        <td>Sunday</td>
        <td>RM 8</td>
        <td>RM 8</td>
        <td>RM 8</td>
        <td>RM 8</td>
        <td>RM 6</td>
      </tr>
      <tr>
        <td>Monday</td>
        <td>RM 6</td>
        <td>RM 6</td>
        <td>RM 6</td>
        <td>RM 6</td>
        <td>RM 5</td>
      </tr>
      <tr>
        <td>Tuesday</td>
        <td>RM 6</td>
        <td>RM 6</td>
        <td>RM 6</td>
        <td>RM 6</td>
        <td>RM 5</td>
      </tr>
      <tr>
        <td>Wednesday</td>
        <td>RM 6</td>
        <td>RM 6</td>
        <td>RM 6</td>
        <td>RM 6</td>
        <td>RM 5</td>
      </tr>
      <tr>
        <td>Thursday</td>
        <td>RM 6</td>
        <td>RM 6</td>
        <td>RM 6</td>
        <td>RM 6</td>
        <td>RM 5</td>
      </tr>
      <tr>
        <td>Friday</td>
        <td>RM 6</td>
        <td>RM 6</td>
        <td>RM 6</td>
        <td>RM 6</td>
        <td>RM 5</td>
      </tr>
    </tbody>
  </table>

  <!-- Spacing -->
  <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>

  <form action="handle_ticket.php" method="post">

    <fieldset><legend>Please pick your ticket:</legend>
      <p>
        <b>Departure Day:</b>
        <select name="day">
              <option selected="selected">--Select--</option>
              <?php
              $day = array (1 => "Saturday", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
              
              foreach($day as $dDay){
                  echo "<option value='$dDay'>$dDay</option>";
              }
              ?>
        </select>
      </p>

      <p>
        <b>Departure Time:</b>
        <select name="time">
              <option selected="selected">--Select--</option>
              <?php
              $time = array (1 => "7:00", "10:00", "13:00", "16:00", "21:00");
              
              foreach($time as $dTime){
                  echo "<option value='$dTime'>$dTime</option>";
              }
              ?>
        </select>
      </p>

    </fieldset>
    
    <div align="left"><input type="submit" name="submit" value="Buy" /></div>

  </form>

<?php
    include ('./ticket_footer.html');
?>
