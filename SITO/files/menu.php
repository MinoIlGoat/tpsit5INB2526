<div class="titolo-sidebar">
  <h4><?php echo htmlspecialchars($title); ?></h4>
</div>
<hr class="my-3">

<?php if (!empty($menu)) { 
  foreach ($menu as $menuItem) { ?>
    <a href="<?php echo htmlspecialchars($menuItem['href']); ?>" 
       class="nav-link p-0 link-light">
       <?php echo htmlspecialchars($menuItem['label']); ?>
    </a>
<?php } } ?>
