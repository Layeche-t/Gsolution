<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>G7solution</title>
	<link rel="stylesheet" type="text/css" href="style_planning.css">
	<script src="https://kit.fontawesome.com/5da465d417.js" crossorigin="anonymous"></script>
</head>
<body>

	<?php include 'header.php';?>

  <h1 class="titre-blog"> <span class="span-blog">Planning</span></h1>
  <div class="contenaire-calandrier">
    <div class="elegant-calencar">
      <p id="reset">reset</p>
        <div id="header" class="clearfix">
           <div class="pre-button"><</div>
            <div class="head-info">
                <div class="head-day"></div>
                <div class="head-month"></div>
            </div>
            <div class="next-button">></div>
        </div>
        <table id="calendar">
            <thead>
                <tr>
                    <th>Dim</th>
                    <th>Lun</th>
                    <th>Mar</th>
                    <th>Mer</th>
                    <th>Jeu</th>
                    <th>Ven</th>
                    <th>Sam</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="evenements">
      <div class="evenement-blanc"> <p class="titre-evenement-vert">FORMATION</p> </div>
      <div class="evenement-vert">  <p class="titre-evenement"> AUDIT </p> </div>
      <div class="evenement-vert">  <p class="titre-evenement">JE MARCHE </p> </div>
      <div class="evenement-blanc"> <p class="titre-evenement-vert">JE T'AIME </p>  </div>
    </div>
  </div>

	<?php include 'footer.php'; ?>

  <!--  -->

  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function(){
    var today = new Date(),
        year = today.getFullYear(),
        month = today.getMonth(),
        monthTag =["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
        day = today.getDate(),
        days = document.getElementsByTagName('td'),
        selectedDay,
        setDate,
        daysLen = days.length;
// options should like '2014-01-01'
    function Calendar(selector, options) {
        this.options = options;
        this.draw();
    }
    
    Calendar.prototype.draw  = function() {
        this.getCookie('selected_day');
        this.getOptions();
        this.drawDays();
        var that = this,
            reset = document.getElementById('reset'),
            pre = document.getElementsByClassName('pre-button'),
            next = document.getElementsByClassName('next-button');
            
            pre[0].addEventListener('click', function(){that.preMonth(); });
            next[0].addEventListener('click', function(){that.nextMonth(); });
            reset.addEventListener('click', function(){that.reset(); });
        while(daysLen--) {
            days[daysLen].addEventListener('click', function(){that.clickDay(this); });
        }
    };
    
    Calendar.prototype.drawHeader = function(e) {
        var headDay = document.getElementsByClassName('head-day'),
            headMonth = document.getElementsByClassName('head-month');

            e?headDay[0].innerHTML = e : headDay[0].innerHTML = day;
            headMonth[0].innerHTML = monthTag[month] +" - " + year;        
     };
    
    Calendar.prototype.drawDays = function() {
        var startDay = new Date(year, month, 1).getDay(),

            nDays = new Date(year, month + 1, 0).getDate(),
    
            n = startDay;

        for(var k = 0; k <42; k++) {
            days[k].innerHTML = '';
            days[k].id = '';
            days[k].className = '';
        }

        for(var i  = 1; i <= nDays ; i++) {
            days[n].innerHTML = i; 
            n++;
        }
        
        for(var j = 0; j < 42; j++) {
            if(days[j].innerHTML === ""){
                
                days[j].id = "disabled";
                
            }else if(j === day + startDay - 1){
                if((this.options && (month === setDate.getMonth()) && (year === setDate.getFullYear())) || (!this.options && (month === today.getMonth())&&(year===today.getFullYear()))){
                    this.drawHeader(day);
                    days[j].id = "today";
                }
            }
            if(selectedDay){
                if((j === selectedDay.getDate() + startDay - 1)&&(month === selectedDay.getMonth())&&(year === selectedDay.getFullYear())){
                days[j].className = "selected";
                this.drawHeader(selectedDay.getDate());
                }
            }
        }
    };
    
    Calendar.prototype.clickDay = function(o) {
        var selected = document.getElementsByClassName("selected"),
            len = selected.length;
        if(len !== 0){
            selected[0].className = "";
        }
        o.className = "selected";
        selectedDay = new Date(year, month, o.innerHTML);
        this.drawHeader(o.innerHTML);
        this.setCookie('selected_day', 1);
        
    };
    
    Calendar.prototype.preMonth = function() {
        if(month < 1){ 
            month = 11;
            year = year - 1; 
        }else{
            month = month - 1;
        }
        this.drawHeader(1);
        this.drawDays();
    };
    
    Calendar.prototype.nextMonth = function() {
        if(month >= 11){
            month = 0;
            year =  year + 1; 
        }else{
            month = month + 1;
        }
        this.drawHeader(1);
        this.drawDays();
    };
    
    Calendar.prototype.getOptions = function() {
        if(this.options){
            var sets = this.options.split('-');
                setDate = new Date(sets[0], sets[1]-1, sets[2]);
                day = setDate.getDate();
                year = setDate.getFullYear();
                month = setDate.getMonth();
        }
    };
    
     Calendar.prototype.reset = function() {
         month = today.getMonth();
         year = today.getFullYear();
         day = today.getDate();
         this.options = undefined;
         this.drawDays();
     };
    
    Calendar.prototype.setCookie = function(name, expiredays){
        if(expiredays) {
            var date = new Date();
            date.setTime(date.getTime() + (expiredays*24*60*60*1000));
            var expires = "; expires=" +date.toGMTString();
        }else{
            var expires = "";
        }
        document.cookie = name + "=" + selectedDay + expires + "; path=/";
    };
    
    Calendar.prototype.getCookie = function(name) {
        if(document.cookie.length){
            var arrCookie  = document.cookie.split(';'),
                nameEQ = name + "=";
            for(var i = 0, cLen = arrCookie.length; i < cLen; i++) {
                var c = arrCookie[i];
                while (c.charAt(0)==' ') {
                    c = c.substring(1,c.length);
                    
                }
                if (c.indexOf(nameEQ) === 0) {
                    selectedDay =  new Date(c.substring(nameEQ.length, c.length));
                }
            }
        }
    };
    var calendar = new Calendar();
    
        
}, false);

  </script>

</body>
</html>



<!-- <div class="calendar-opts">
    <select name="calendar_month" id="calendar__month">
      <option class="option-calandrier">Jan</option>
      <option class="option-calandrier">Feb</option>
      <option class="option-calandrier">Mar</option>
      <option class="option-calandrier">Apr</option>
      <option class="option-calandrier" selected>May</option>
      <option class="option-calandrier">Jun</option>
      <option>Jul</option>
      <option>Aug</option>
      <option>Sep</option>
      <option>Oct</option>
      <option>Nov</option>
      <option>Dec</option>
    </select>

    <select name="calendar_year" id="calendar_year">
      <option>2017</option>
      <option>2018</option>
      <option>2019</option>
      <option>2020</option>
      <option selected>2021</option>
    </select>
  </div>

  <div class="calendar_body">
    <div class="calendar_days">
      <div>M</div>
      <div>T</div>
      <div>W</div>
      <div>T</div>
      <div>F</div>
      <div>S</div>
      <div>S</div>
    </div>

    <div class="calendar_dates">
      <div class="calendar_date calendar_date-grey"><span>27</span></div>
      <div class="calendar_date calendar_date-grey"><span>28</span></div>
      <div class="calendar_date calendar_date-grey"><span>29</span></div>
      <div class="calendar_date calendar_date-grey"><span>30</span></div>
      <div class="calendar_date"><span>1</span></div>
      <div class="calendar_date"><span>2</span></div>
      <div class="calendar_date"><span>3</span></div>
      <div class="calendar_date"><span>4</span></div>
      <div class="calendar_date"><span>5</span></div>
      <div class="calendar_date"><span>6</span></div>
      <div class="calendar_date"><span>7</span></div>
      <div class="calendar_date"><span>8</span></div>
      <div class="calendar_date"><span>9</span></div>
      <div class="calendar_date"><span>10</span></div>
      <div class="calendar_date"><span>11</span></div>
      <div class="calendar_date"><span>12</span></div>
      <div class="calendar_date"><span>13</span></div>
      <div class="calendar_date"><span>14</span></div>
      <div class="calendar_date"><span>15</span></div>
      <div class="calendar_date calendar_date-selected calendar_date-first-date calendar_date-range-start"><span>16</span></div>
      <div class="calendar_date calendar_date--selected calendar_date-last-date"><span>17</span></div>
      <div class="calendar_date calendar_date--selected calendar_date-first-date"><span>18</span></div>
      <div class="calendar_date calendar_date--selected"><span>19</span></div>
      <div class="calendar_date calendar_date--selected"><span>20</span></div>
      <div class="calendar_date calendar_date--selected calendar_date-last-date calendar_date-range-end"><span>21</span></div>
      <div class="calendar_date"><span>22</span></div>
      <div class="calendar_date"><span>23</span></div>
      <div class="calendar_date"><span>24</span></div>
      <div class="calendar_date"><span>25</span></div>
      <div class="calendar_date"><span>26</span></div>
      <div class="calendar_date"><span>27</span></div>
      <div class="calendar_date"><span>28</span></div>
      <div class="calendar_date"><span>29</span></div>
      <div class="calendar_date"><span>30</span></div>
      <div class="calendar_date"><span>31</span></div>
    </div>
  </div>

  <div class="calendar__buttons">
    <button class="calendar_button calendar_button--grey">Back</button>

    <button class="calendar_button calendar_button--primary">Apply</button>
  </div> -->