<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'wdv341';

$connection = new mysqli($host, $user, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT kb_title, kb_content, kb_category FROM knowledge_base";
$result = $connection->query($sql);

// Check for errors
if (!$result) {
  die("Error: " . $sql . "<br>" . $connection->error);
}

// Store the results in an array
$articles = array();
while ($row = $result->fetch_assoc()) {
  $articles[$row['kb_category']][] = $row;
}

// Close the database connection
$connection->close();
?>

<!-- header -->
<?php include('header.php'); ?>


<!-- solution.php -->


<div class="container">
  <h1>Knowledge Base</h1>
  <br>
  <ul class="nav nav-tabs">
    <?php foreach (array_keys($articles) as $category): ?>
      <li class="nav-item">
        <?php if ($category === 'Desktop Issues'): ?>
          <a class="nav-link active" href="#desktop-issues" data-bs-toggle="tab" style="color:#333">Desktop Issues</a>
        <?php else: ?>
          <a class="nav-link" href="#<?= strtolower(str_replace(' ', '-', $category)) ?>" data-bs-toggle="tab" style="color:#333"><?= $category ?></a>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ul>

  <div class="tab-content">
    <!-- Desktop Issues -->
    <div class="tab-pane fade show active" id="desktop-issues" role="tabpanel">
      <h2>Desktop Issues</h2>
      <?php foreach ($articles['Desktop Issues'] as $article): ?>
        <h3><?= $article['kb_title'] ?></h3>
        <p><?= $article['kb_content'] ?></p>
      <?php endforeach; ?>
    </div>

    <!-- Laptop Issues -->
    <div class="tab-pane fade" id="laptop-issues" role="tabpanel">
      <h2>Laptop Issues</h2>
      <?php foreach ($articles['Laptop Issues'] as $article): ?>
        <h3><?= $article['kb_title'] ?></h3>
        <p><?= $article['kb_content'] ?></p>
      <?php endforeach; ?>
    </div>

    <!-- Docking Station Issues -->
    <div class="tab-pane fade" id="docking-station-issues" role="tabpanel">
      <h2>Docking Station Issues</h2>
      <?php foreach ($articles['Docking Station Issues'] as $article): ?>
        <h3><?= $article['kb_title'] ?></h3>
        <p><?= $article['kb_content'] ?></p>
      <?php endforeach; ?>
    </div>
    
    <?php foreach ($articles as $category => $categoryArticles): ?>
      <?php if ($category !== 'Desktop Issues' && $category !== 'Laptop Issues' && $category !== 'Docking Station Issues'): ?>
        <div class="tab-pane fade<?= ($category === reset(array_keys($articles))) ? ' show active' : '' ?>" id="<?= $category ?>" role="tabpanel">
          <?php foreach ($categoryArticles as $article): ?>
            <h2><?= $article['kb_title'] ?></h2>
            <p><?= $article['kb_content'] ?></p>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</div>

  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>

  <!-- Footer Goes Here -->
  <?php include('footer.php'); ?>







<!-- KB Article Ideas:

Desktop PC Common Issues:

Troubleshooting common startup issues
How to diagnose and fix hardware problems
Tips for maintaining and optimizing performance
How to troubleshoot and fix common software issues
What to do if your PC won't connect to the internet
How to resolve common printing issues
Docking Stations:

How to set up a docking station
Troubleshooting issues with external displays
How to connect and troubleshoot audio devices
Tips for maintaining and optimizing performance
How to troubleshoot and fix common connection issues
How to update docking station firmware and drivers
Laptop Issues:

How to diagnose and fix hardware problems
Tips for maintaining and optimizing performance
How to troubleshoot and fix common software issues
What to do if your laptop won't connect to the internet
How to resolve common battery issues
How to fix overheating problems
Monitor Issues:

How to troubleshoot and fix common display issues
How to calibrate your monitor for optimal viewing
How to connect and troubleshoot audio devices
Tips for maintaining and optimizing performance
How to troubleshoot and fix common connection issues
How to update monitor firmware and drivers

-->