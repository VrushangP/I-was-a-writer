<?php 
	require_once(__DIR__ . '/../../../resources/views/templates/myheader.php');
  require_once(__DIR__ . '/../../../resources/views/templates/footer.php');
	$header = generateNav('index');
  $footer = generateFooter('index');
?>

<title>Icarus Security</title>

<?php
	echo $header; 
?>

<body class="has-background-primary-light">
  <section class="section">
    <div class="container">
      <div class="columns is-vcentered">
        <div class="column">
          <p class="title is-2 p-4 has-text-info-dark">Hey There!👋🏼<br>I'm Vrushang</I></p>
          <p class="subtitle is-4 has-text-info-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
        </div>
        <div class="column section">
          <div class="box section is-large index-bg-img">
        </div>
      </div>
    </div>
  </section>
  <section class="section is-medium has-background-info-dark">
    <div class="container">
      <div class="table-container">
        <table class="table is-fullwidth">
          <thead>
            <tr>
              <th>Column 1</th>
              <th>Column 2</th>
              <th>Column 3</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Data 1</td>
              <td>Data 2</td>
              <td>Data 3</td>
            </tr>
            <!-- Add more rows here as needed -->
          </tbody>
        </table>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div class="columns is-vcentered">
        <div class="column">
          <figure class="image is-4by5">
            <img src="img\pexels-creative-free-stock-971360.webp" alt="Image Description">
          </figure>
        </div>
        <div class="column">
          <p class="subtitle is-5">About the Image</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Suspendisse id dui purus.</p>
        </div>
      </div>
    </div>
  </section>


</body>

<?php
    echo $footer;
?>
