<div class='header'>
  <div class='content'>
    <div class='branding'>
      <div class='logo'></div>
      <h1><i>The Phillipian</i>: Archives</h1>
      <p>First printed in 1857, <i>The Phillipian</i> is Phillips Academy's weekly student newspaper. Completely uncensored and entirely student-run, the paper is distributed every Friday from September to June. Explore <i>The Phillipian</i> in its entirety from 1878.</p>
    </div>
  </div>
  <div class='navigation'>
    <ul>
      <a href='../' <?php if (basename($_SERVER['REQUEST_URI'], '.php') === '') echo "class='selected'"; ?>><li><p>Recent Issues</p></li></a>
      <a <?php if (basename(strtok($_SERVER["REQUEST_URI"],'?'), '.php') === 'explore') echo "class='selected'"; ?>>
        <li>
          <form action='../explore' method='GET'>
            <select name='year' onchange="this.form.submit()">
              <?php if (!array_key_exists('year', $_GET)): ?>
                <option disabled='disabled' selected='selected'>Explore by Year</option>
              <?php else: ?>
                <option disabled='disabled'>Explore by Year</option>
              <?php endif ?>
              <?php for($y = date('Y'); $y >= Archive::MIN_YEAR; $y--): ?>
                <?php if (array_key_exists('year', $_GET) && $_GET['year'] == $y): ?>
                  <option selected='selected' value='<?php echo $y; ?>'>Issues from <?php echo $y; ?></option>
                <?php else: ?>
                  <option value='<?php echo $y; ?>'><?php echo $y; ?></option>
                <?php endif ?>
              <?php endfor ?>
            </select>
          </form>
        </li>
      </a>
      <a href='../today' <?php if (basename($_SERVER['REQUEST_URI'], '.php') === 'today') echo "class='selected'"; ?>><li><p>Today in History</p></li></a>
      <a href='../latest'><li><p>Latest Issue</p></li></a>
      <a href='../random'><li><p>Random Issue</p></li></a>
      <a href='https://twitter.com/pliparchives'><li><p>Follow on Twitter</p></li></a>
    </ul>
  </div>
</div>
