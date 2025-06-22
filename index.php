<!DOCTYPE html>
<html>
<head>
<style>

/*Basic Flex Box Example*/ 
/*A Flexible Layout must have a parent element with the display property set to flex.

Direct child elements(s) of the flexible container automatically becomes flexible items.*/
/*
    .flex-container {
  display: flex;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  margin: 10px;
  padding: 20px;
  font-size: 30px;
}
*/
    
/* Vertical Alignment*/
/*The "flex-direction: column;" stacks the flex items vertically (from top to bottom)*/
/*
.flex-container {
  display: flex;
  flex-direction: column;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
} 
*/    
/* Vertical Alignment (Reverse Order)*/
/*The "flex-direction: column-reverse;" stacks the flex items vertically (but from bottom to top)*/
/*    
.flex-container {
  display: flex;
  flex-direction: column-reverse;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}
*/
    
/*The flex-direction Property*/
/*The "flex-direction: row;" stacks the flex items horizontally (from left to right)*/
/*
.flex-container {
  display: flex;
  flex-direction: row;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}    
*/
/*The flex-direction Property*/
/*The "flex-direction: row-reverse;" stacks the flex items horizontally (but from right to left)*/
/*
.flex-container {
  display: flex;
  flex-direction: row-reverse;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}
*/
/*The flex-wrap Property*/
/*The "flex-wrap: wrap;" specifies that the flex items will wrap if necessary */
/*    
.flex-container {
  display: flex;
  flex-wrap: wrap;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}    
*/
/*The flex-wrap Property*/
/*The "flex-wrap: nowrap;" specifies that the flex items will not wrap (this is default)*/
/*
.flex-container {
  display: flex;
  flex-wrap: nowrap;
  background-color: DodgerBlue;
}

.flex-container>div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
} 
*/
/*The flex-wrap Property*/
/*The "flex-wrap: wrap-reverse;" specifies that the flex items will wrap if necessary, in reverse order*/
/*
.flex-container {
  display: flex;
  flex-wrap: wrap-reverse;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}    
*/
    
/*The flex-flow Property */
/*The flex-flow property is a shorthand property for the flex-direction and the flex-wrap properties.*/    
/*
.flex-container {
  display: flex;
  flex-flow: row wrap;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}
*/
    
/*The justify-content Property*/
/*The "justify-content: center;" aligns the flex items at the center of the container:*/
/*.flex-container {
  display: flex;
  justify-content: center;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}    
*/
    
/*The justify-content Property */
/*The "justify-content: flex-start;" aligns the flex items at the beginning of the container (this is default)*/
/*    
.flex-container {
  display: flex;
  justify-content: flex-start;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}
*/

/* The justify-content Property  */
/* The "justify-content: flex-end;" aligns the flex items at the end of the container:         */
/*    
.flex-container {
  display: flex;
  justify-content: flex-end;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}
*/
    
/*The justify-content Property*/
/*The "justify-content: space-around;" displays the flex items with space before, between, and after the lines:*/

/* 
 .flex-container {
  display: flex;
  justify-content: space-around;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}   
*/
    
/*The justify-content Property*/
/*The "justify-content: space-between;" displays the flex items with space between the lines:*/

/*    
.flex-container {
  display: flex;
  justify-content: space-between;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}
*/
    
/*The align-items Property*/
/*The "align-items: center;" aligns the flex items in the middle of the container:*/
    
/*.flex-container {
  display: flex;
  height: 200px;
  align-items: center;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}     */
    
/*The align-items Property*/
/*The "align-items: flex-start;" aligns the flex items at the top of the container:*/

 /*.flex-container {
  display: flex;
  height: 200px;
  align-items: flex-start;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
} */

/*The align-items Property*/
/*The "align-items: flex-end;" aligns the flex items at the bottom of the container:*/
/*.flex-container {
  display: flex;
  height: 200px;
  align-items: flex-end;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
} */  

    
/*The align-items Property*/
/*The "align-items: stretch;" stretches the flex items to fill the container (this is default):*/
/*.flex-container {
  display: flex;
  height: 200px;
  align-items: stretch;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}
 */

/*The align-items Property*/
/*The "align-items: baseline;" aligns the flex items such as their baselines aligns:*/
/*.flex-container {
  display: flex;
  height: 200px;
  align-items: baseline;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}
 */

    
/*The align-content Property*/
/*The "align-content: space-between;" displays the flex lines with equal space between them:*/
/*.flex-container {
  display: flex;
  height: 600px;
  flex-wrap: wrap;
  align-content: space-between;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}    */
 

/*The align-content Property*/
/*The "align-content: space-around;" displays the flex lines with space before, between, and after them:*/
/*.flex-container {
  display: flex;
  height: 600px;
  flex-wrap: wrap;
  align-content: space-around;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
} */
    

/*The align-content Property*/
/*The "align-content: stretch;" stretches the flex lines to take up the remaining space (this is default):*/
/*.flex-container {
  display: flex;
  height: 600px;
  flex-wrap: wrap;
  align-content: stretch;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}
 */    

/*The align-content Property*/
/*The "align-content: center;" displays the flex lines in the middle of the container:*/
/*.flex-container {
  display: flex;
  height: 600px;
  flex-wrap: wrap;
  align-content: center;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
} */

/*The align-content Property*/
/*The "align-content: flex-start;" displays the flex lines at the start of the container:*/
/*.flex-container {
  display: flex;
  height: 600px;
  flex-wrap: wrap;
  align-content: flex-start;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
} */ 

    
/*The align-content Property*/
/*The "align-content: flex-end;" displays the flex lines at the end of the container:*/
/*.flex-container {
  display: flex;
  height: 600px;
  flex-wrap: wrap;
  align-content: flex-end;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
} */ 

/*Perfect Centering*/
/*A container with both the justify-content and the align-items properties set to center will align the item(s) in the center (in both axis).*/ 
/*.flex-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 300px;
  background-color: DodgerBlue;
}

.flex-container>div {
  background-color: #f1f1f1;
  color: white;
  width: 100px;
  height: 100px;
} */ 
    
/*The order Property*/
/*Use the order property to sort the flex items as you like:*/
/*.flex-container {
  display: flex;
  align-items: stretch;
  background-color: #f1f1f1;
}

.flex-container>div {
  background-color: DodgerBlue;
  color: white;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
} */


/*The flex-shrink Property*/
/*Do not let the third flex item shrink as much as the other flex items:*/
/*.flex-container {
  display: flex;
  align-items: stretch;
  background-color: #f1f1f1;
}

.flex-container>div {
  background-color: DodgerBlue;
  color: white;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
} */    

    
/*The flex-basis Property*/
/*Set the initial length of the third flex item to 200 pixels:*/
/*.flex-container {
  display: flex;
  align-items: stretch;
  background-color: #f1f1f1;
}

.flex-container > div {
  background-color: DodgerBlue;
  color: white;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
} */

/*The flex Property*/
/*Make the third flex item not growable (0), not shrinkable (0), and with an initial length of 200 pixels:*/
/*.flex-container {
  display: flex;
  align-items: stretch;
  background-color: #f1f1f1;
}

.flex-container>div {
  background-color: DodgerBlue;
  color: white;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
} */

/*The align-self Property*/
/*The "align-self: center;" aligns the selected flex item in the middle of the container:*/
/*The align-self property overrides the align-items property of the container.*/
/*.flex-container {
  display: flex;
  height: 200px;
  background-color: #f1f1f1;
}

.flex-container > div {
  background-color: DodgerBlue;
  color: white;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
} */

/*The align-self Property*/
/*The "align-self: flex-start;" aligns the selected flex item at the top of the container.*/
/*The "align-self: flex-end;" aligns the selected flex item at the bottom of the container.*/
.flex-container {
  display: flex;
  height: 200px;
  background-color: #f1f1f1;
}

.flex-container > div {
  background-color: DodgerBlue;
  color: white;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}
    

    
    
    
</style>
</head>
<body>

<div class="flex-container">
  
<!--
    <div>1</div>
    <div>2</div>
    <div>3</div>
    <div>4</div>
    <div>5</div>
    <div>6</div>  
    <div>7</div> -->
     
    

<!--
    <div><h1>1</h1></div>
    <div><h6>2</h6></div>
    <div><h3>3</h3></div>  
    <div><small>4</small></div>  -->
   
  
<!--
    <div>8</div>
    <div>9</div>  
    <div>10</div>
    <div>11</div>
    <div>12</div>  -->

<!--Perfectly Centered box -->
<!--<div>Center</div> -->

<!--The order Property-->
<!--Use the order property to sort the flex items as you like:-->
<!--
<div style="order: 3">1</div>
    <div style="order: 2">2</div>
    <div style="order: 4">3</div> 
    <div style="order: 1">4</div> -->    
    
<!--The flex-shrink Property-->
<!--Do not let the third flex item shrink as much as the other flex items:-->
<!--Only works in Chrome -->
<!--<div>1</div>
    <div>2</div>
    <div style="flex-shrink: 0">3</div>
    <div>4</div>
    <div>5</div>
    <div>6</div>
    <div>7</div>
    <div>8</div>
    <div>9</div>
    <div>10</div> -->  

<!--The flex-basis Property-->
<!--Set the initial length of the third flex item to 200 pixels:-->
<!--
    <div>1</div>
    <div>2</div>
    <div style="flex-basis:200px">3</div>
    <div>4</div> -->
    

<!--The flex Property-->
<!--Make the third flex item not growable (0), not shrinkable (0), and with an initial length of 200 pixels:-->
<!--<div>1</div>
    <div>2</div>
    <div style="flex: 0 0 200px">3</div>
    <div>4</div> -->

    

<!--The align-self Property-->
<!--The "align-self: center;" aligns the selected flex item in the middle of the container:-->
<!--The align-self property overrides the align-items property of the container.-->
<!--<div>1</div>
    <div>2</div>
    <div style="align-self: center">3</div>
    <div>4</div> -->      
    
    
<!--The align-self Property-->
<!--The "align-self: flex-start;" aligns the selected flex item at the top of the container.-->
<!--The "align-self: flex-end;" aligns the selected flex item at the bottom of the container.-->
<!--The align-self property overrides the align-items property of the container.-->
    

    <div>1</div>
    <div style="align-self: flex-start">2</div>
    <div style="align-self: flex-end">3</div>
    <div>4</div>



  


    
  
   
</div>



</body>
</html>
