<?php
$students = [
    [
        "name" => "Alaa",
        "age" => 20,
        "grade" => 88
    ],
    [
        "name" => "Roaa",
        "age" => 21,
        "grade" => 90
    ],
    [
        "name" => "Arwa",
        "age" => 20,
        "grade" => 71
    ],
    [
        "name" => "Sara",
        "age" => 20,
        "grade" => 65
    ],
    [
        "name" => "Lama",
        "age" => 22,
        "grade" => 55
    ]
];

function calculateStatus($grade)
{
    if ($grade >= 90) {
        return "Excellent";
    } elseif ($grade >= 80) {
        return "Very Good";
    } elseif ($grade >= 70) {
        return "Good";
    } elseif ($grade >= 60) {
        return "Pass";
    } else {
        return "Fail";
    }
}

function maxGrade($students)
{
    $maxGrade = 0;
    foreach ($students as $student) {
        if ($student["grade"] > $maxGrade) {
            $maxGrade = $student["grade"];
        }
    }
    return $maxGrade;
}

function minGrade($students)
{
    $minGrade = 100;
    foreach ($students as $student) {
        if ($student["grade"] < $minGrade) {
            $minGrade = $student["grade"];
        }
    }
    return $minGrade;
}

function average($students)
{
    $total = 0;
    foreach ($students as $student) {
        $total += $student["grade"];
    }
    $total = $total / count($students);
    return $total;
}

function passedStudents($students)
{
    $passed = 0;
    foreach ($students as $student) {
        if ($student["grade"] >= 60) {
            $passed++;
        }
    }
    return $passed;
}

?>

<style>
    .container {
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }

    table {
        border-collapse: collapse;
        width: 70%;
        text-align: center;
    }

    th,
    td {
        border: 1px solid #ccc;
        padding: 10px;
    }

    th {
        background-color: #f2f2f2;
    }

    .footer-row {
        background-color: #fafafa;
        font-weight: bold;
    }
</style>

<div class="container">
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Grade</th>
            <th>Status</th>
        </tr>

        <?php foreach ($students as $student) { ?>
            <tr>
                <td><?= $student["name"] ?></td>
                <td><?= $student["age"] ?></td>
                <td><?= $student["grade"] ?></td>
                <td><?= calculateStatus($student["grade"]) ?></td>
            </tr>
        <?php } ?>

        <tr class="footer-row">
            <td>Max grade: <?= maxGrade($students) ?></td>
            <td>Min grade: <?= minGrade($students) ?></td>
            <td>Average: <?= average($students) ?></td>
            <td>Passed: <?= passedStudents($students) ?></td>
        </tr>
    </table>
</div>