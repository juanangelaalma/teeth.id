<?php

function timestamp_to_date($timestamp) {
  $date = date('Y-m-d', strtotime($timestamp));
  $months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
  $splittedDate = explode('-', $date);
  return $splittedDate[2] . ' ' . $months[(int)$splittedDate[1]] . ' ' . $splittedDate[0];
}