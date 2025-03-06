<?php
function calculerAge($dateNaissance) {
  $date = new DateTime($dateNaissance);
  $now = new DateTime();
  $interval = $now->diff($date);
  return $interval->y;
}
?>
