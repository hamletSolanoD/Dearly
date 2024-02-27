<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Memory Timeline Calendar</title>
<style>

  .calendar {
    text-align: center;
  }
  .month {
    margin-bottom: 20px;
  }
  .month label {
    font-size: 24px;
    font-weight: bold;
  }
  .days {
    display: flex;
    justify-content: space-between;
    margin-bottom: 5px;
  }
  .day {
    width: 40px;
    height: 40px;
    background-color: #222;
    border-radius: 50%;
    line-height: 40px;
    display: inline-block;
    margin: 2px;
  }
  .day.active {
    background-color: red;
  }
  .day.today {
    background-color: red;
    border: 2px solid white;
  }
</style>
</head>
<body>

<div class="calendar">
  <div class="month">
    <label>Memories Timeline</label>
    <div>Travel Party Adventur Love Celebrat Friends Family</div>
  </div>
  <div class="days">
    <span class="day">27</span>
    <span class="day">28</span>
    <span class="day">29</span>
    <span class="day">30</span>
    <span class="day">31</span>
    <span class="day">1</span>
    <span class="day">2</span>
  </div>
  <div class="days">
    <!-- Repeat for each row of days -->
    <span class="day">3</span>
    <span class="day">4</span>
    <span class="day">5</span>
    <span class="day">6</span>
    <span class="day">7</span>
    <span class="day active">8</span>
    <span class="day">9</span>
  </div>
  <!-- Repeat for the number of weeks in your calendar -->
</div>

</body>
</html>
