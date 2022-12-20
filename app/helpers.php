<?php

use Illuminate\Support\Carbon;

function timestamp_to_date($timestamp) {
  $date = date('Y-m-d', strtotime($timestamp));
  $months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
  $splittedDate = explode('-', $date);
  return $splittedDate[2] . ' ' . $months[$splittedDate[1]-1] . ' ' . $splittedDate[0];
}

// function get_diff_timestap($timestamp) {
//   Carbon::
// }

function day_english_to_indo($day) {
  $days = [
    'monday' => 'Senin',
    'tuesday' => 'Selasa',
    'wednesday' => 'Rabu',
    'thursday' => 'Kamis',
    'friday' => 'Jumat',
    'saturday' => 'Sabtu',
    'sunday' => 'Minggu',
  ];
  return $days[$day];
}