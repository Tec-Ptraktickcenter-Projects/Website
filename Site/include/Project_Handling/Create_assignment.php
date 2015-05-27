<?php 
// ===============================================================================
if((isset ($_SESSION['user'])) && (isset($_SESSION['create_assignment']))){
    ?>

<h1>Opret ny Opgave</h1>


<form action="" method="post">
    <table>
        <tr>
            <td>Navn: </td>
            <td>
                <input type="text" min="2" max="40" name="assignmentName" required>
            </td>
        </tr>
        <tr>
            <td>Beskrivelse: </td>
            
               <td><textarea cols="50" rows="5" name="assignmentDescription">Indtast en udførlig beskrivelse af opgaven</textarea></td>
            
        </tr>
        
               <tr>
             <td>Hovedforløb: </td>
            <td>
                <select required name="maincurse">
                    <option selected value="" >Status på opgave</option>
                   
                        <option value=5>5%</option>;
                        <option value=10>10%</option>;
                        <option value=15>15%</option>;
                        <option value=20>20%</option>;
                        <option value=25>25%</option>;
                        <option value=30>30%</option>;
                        <option value=35>35%</option>;
                        <option value=40>40%</option>;
                        <option value=45>45%</option>;
                        <option value=50>50%</option>;
                        <option value=55>55%</option>;
                        <option value=60>60%</option>;
                        <option value=65>65%</option>;
                        <option value=70>70%</option>;
                        <option value=75>75%</option>;
                        <option value=80>80%</option>;
                        <option value=85>85%</option>;
                        <option value=90>90%</option>;
                        <option value=85>95%</option>;
                        <option value=100>100%</option>;
                      
                </select>
            </td>            
        </tr>
        
       
        
        
        <tr>
            <td colspan="2">
                <input type="submit" name="create_assignment" value="Opret opgave">
            </td>
        </tr>
    </table>
</form>


<?php
    
}
    else {header('location: index.php');} 
// ===============================================================================