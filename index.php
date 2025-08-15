<?php
include 'db.php';
$result = $conn->query("SELECT * FROM expenses ORDER BY date DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Daily Expense Tracker</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h1>Daily Expense Tracker</h1>
<form action="add_expense.php" method="POST">
<input type="date" name="date" required>
<input type="text" name="category" placeholder="Category" required>
<input type="number" name="amount" placeholder="Amount" required>
<button type="submit">Add Expense</button>
</form>

<h2>Expenses</h2>
<table>
<tr><th>Date</th><th>Category</th><th>Amount</th><th>Action</th></tr>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
<td><?= $row['date'] ?></td>
<td><?= $row['category'] ?></td>
<td><?= $row['amount'] ?></td>
<td><a href="delete_expense.php?id=<?= $row['id'] ?>">Delete</a></td>
</tr>
<?php endwhile; ?>
</table>
</div>
<script src="script.js"></script>
</body>
</html>