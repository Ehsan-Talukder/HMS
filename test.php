 <?php
  $guest_name = ($_REQUEST['guest_name']);
  $contact_number = ($_REQUEST['contact_number']);
  $email = ($_REQUEST['email']);
   $room_number = ($_REQUEST['room_number']);
  $ref_by = ($_REQUEST['ref_by']);
  $age = ($_REQUEST['age']);
  $birth_date = ($_REQUEST['birth_date']);
  $gender = ($_REQUEST['gender']);
  $pax = ($_REQUEST['pax']);
  $present_address = ($_REQUEST['present_address']);
  $permanent_address = ($_REQUEST['permanent_address']);
  $nationality = ($_REQUEST['nationality']);
   $identity = ($_REQUEST['identity']);
  $purpose_of_visit = ($_REQUEST['purpose_of_visit']);
  $in_date = ($_REQUEST['in_date']);
  $out_date = ($_REQUEST['out_date']);
  $special_note = ($_REQUEST['special_note']);
  $date1 = new DateTime("$in_date");
  $date2 = new DateTime("$out_date");
  $advance_payment=($_REQUEST['advance_payment']);
  $payment_method=($_REQUEST['payment_method']);
  echo $discount=($_REQUEST['discount']);
 ?>