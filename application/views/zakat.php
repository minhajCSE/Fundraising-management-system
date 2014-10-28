<div class='fix main'>
    <div class='fix cal'>
        <p class="h_text">Zakat Calculator:</p>
        <form name="calculator">  

            <!-- Here user will enter 1st number. -->  
            <div class='fix gold'>
                <div class='a1'><p>Enter price of goald:</p></div>
                <div class='b1'><input class='num1' type="text" name="number1"></div></br>  
            </div>
            <div class='fix silver'>
                <div class='a2'><p>Enter price of silver:</p></div>
                <div class='b1'><input class='num2' type="text" name="number2"></div></br>  
            </div>

            <div class='fix crops_naturally'>
                <div class='a3'><p>Enter price of crops naturally:</p></div>
                <div class='b1'><input class='num3' type="text" name="number3"> </div></br>  
            </div>
            <div class='fix crops_water'>
                <div class='a4'><p>Enter price of crops with irrigated water:</p></div> 
                <div class='b1'><input class='num4' type="text" name="number4"> </div></br>  
            </div>
            <div class='fix cash'>
                <div class='a5'><p>Enter Cash on hand and at bank: </p></div>
                <div class='b1'><input class='num5' type="text" name="number5"> </div></br>  
            </div>
            <div class='fix loans'>
                <div class='a6'><p>Enter Loans Receivable from Friends and Relatives:</p></div> 
                <div class='b1'><input class='num6' type="text" name="number6"> </div></br>  
            </div>
            <div class='fix profit'>
                <div class='a7'><p>Enter Shares, both value and profit: </p></div>
                <div class='b1'><input class='num7' type="text" name="number7"> </div></br>  
            </div>
            <div class='fix stock'>
                <div class='a8'><p>Enter Value of Saleable Stock: </p></div>
                <div class='b1'><input class='num8' type="text" name="number8"></div> </br>  
            </div>
            <div class='fix due_payment'>
                <div class='a9'><p>Enter Liabilities: Debts due for immediate payment:</p></div>
                <div class='b1'><input class='num9' type="text" name="number9"> </div></br>  
            </div>
            <div class='fix land'>
                <div class='a10'><p>Enter price of land: </p></div>
                <div class='b1'><input class='num10' type="text" name="number10"></div> </br>  
            </div>
            <!-- Here respective button when clicked, calls only respective artimetic function. -->
            <div class='btn-zakat'>
                <input class='calculate'type="button" value="Calculate" onClick="javascript:zakat();">
                <input class='reset' type="reset" value="Reset" />
                </br>
            </div>

            <!-- Here result will be displayed. --> 
            <div class="zakat-givel-area">
            <div class='total'>
                <div class='taka'><p>Total Taka:</p></div>

                <div class='taka1'><input class='total1' type="text" name="total">
                </div>

            </div></br>
            <div class='jakat'>
                <div class='jakat_given'>
                    <p>Given jakat:</p>
                </div>
                <div class='jakat1'>
                    <input class='given_jakat'type="text" name="jakat">  
                </div>											
            </div>
           </div> 
        </form>  
        <div class="margin-top"></div>
        <div class="donate-z">
            <h2><a href="">Donate !</a></h2>
        </div>
        
    </div>
</div>