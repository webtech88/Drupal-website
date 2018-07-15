Name: <?php echo check_plain($first_name) ?><br>
Surname: <?php echo check_plain($last_name) ?><br>
Email: <?php echo check_plain($email) ?><br>
Phone: <?php echo check_plain($phone) ?><br>
Topic: <?php echo check_plain($subject) ?><br>
Marketing: <?php echo $marketing_exclude ? 'NO' : 'YES' ?><br>

Message:<br>
<pre>
<?php echo check_plain($message) ?>
</pre>
