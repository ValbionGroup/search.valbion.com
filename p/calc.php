<div class="zci__body"><div class="calculator--wrap tile--calculator" tabindex="0">
    <div class="tile__calc clearfix">
        <button class="tile__skip-calc">Skip calculator</button>
        <div class="tile__display">
            <div class="tile__display__aside--wrap">
                <span class="tile__display__aside" id="expression"></span>
            </div>
            <input class="tile__display__main calc_resultat" type="text" readonly="readonly" name="calc_resultat" id="calc_resultat" onkeydown="javascript:key_detect_calc('calc',event);" />

            <ul class="tile__options">
                <li class="tile__option tile__option__history" data-tab="history"><span>Historique</span></li>
            </ul>
        </div>

        <div class="tile__tabs">

            <!-- scientific keyboard -->
            <div class="tile__calc__col tile__tab__sci disable">
                <span class="tile__ctrl__toggle">
                    <span>RAD</span>
                    <label class="tile__ctrl__toggle-indicator" data-children-count="1">
                        <input type="checkbox" id="tile__ctrl__toggle-checkbox">
                        <div class="tile__ctrl__toggle-slider tile__ctrl__round-icon"></div>
                    </label>
                    <span>DEG</span>
                </span>
                <button class="tile__ctrl__btn" value="(">(</button>
                <button class="tile__ctrl__btn" value=")">)</button>

                <button class="tile__ctrl__btn" value="sin(">sin</button>
                <button class="tile__ctrl__btn" value="cos(">cos</button>
                <button class="tile__ctrl__btn" value="tan(">tan</button>
                <button class="tile__ctrl__btn" value="π">π</button>

                <button class="tile__ctrl__btn" value="!">x!</button>
                <button class="tile__ctrl__btn" value="<sup>2</sup>">x<sup>2</sup></button>
                <button class="tile__ctrl__btn" value="<sup>3</sup>">x<sup>3</sup></button>
                <button class="tile__ctrl__btn" value="<sup>□</sup>">x<sup>y</sup></button>

                <button class="tile__ctrl__btn" value="1/(">1/x</button>
                <button class="tile__ctrl__btn" value="√(">√x</button>
                <button class="tile__ctrl__btn" value="<sup>□</sup>√"><sup>x</sup>√y</button>
                <button class="tile__ctrl__btn" value="EE">EE</button>

                <button class="tile__ctrl__btn" value="log(">log</button>
                <button class="tile__ctrl__btn" value="ln(">ln</button>
                <button class="tile__ctrl__btn" value="e<sup>□</sup>">e<sup>x</sup></button>
                <button class="tile__ctrl__btn" value="e">e</button>
            </div>

            <!-- numeric keyboard -->
            <div class="tile__calc__col tile__tab__basic">
                <input type="button" class="calc_btn tile__ctrl__btn tile__ctrl--double" value="CE" onclick="javascript:f_calc('calc','ce');" />
                <input type="button" class="calc_btn tile__ctrl__btn tile__ctrl--ops" value="%" onclick="javascript:f_calc('calc','%');" />
                <input type="button" class="calc_btn tile__ctrl__btn tile__ctrl--important" value="&divide;" onclick="javascript:f_calc('calc','/');" />

                <input type="button" class="calc_btn tile__ctrl__btn tile__ctrl__btn" value="7" onclick="javascript:add_calc('calc',7);" />
                <input type="button" class="calc_btn tile__ctrl__btn" value="8" onclick="javascript:add_calc('calc',8);" />
                <input type="button" class="calc_btn tile__ctrl__btn" value="9" onclick="javascript:add_calc('calc',9);" />
                <input type="button" class="calc_btn tile__ctrl__btn tile__ctrl--important" value="x" onclick="javascript:f_calc('calc','*');" />

                <input type="button" class="calc_btn tile__ctrl__btn" value="4" onclick="javascript:add_calc('calc',4);" />
                <input type="button" class="calc_btn tile__ctrl__btn" value="5" onclick="javascript:add_calc('calc',5);" />
                <input type="button" class="calc_btn tile__ctrl__btn" value="6" onclick="javascript:add_calc('calc',6);" />
                <input type="button" class="calc_btn tile__ctrl__btn tile__ctrl--important" value="-" onclick="javascript:f_calc('calc','-');" />

                <input type="button" class="calc_btn tile__ctrl__btn" value="1" onclick="javascript:add_calc('calc',1);" />
                <input type="button" class="calc_btn tile__ctrl__btn" value="2" onclick="javascript:add_calc('calc',2);" />
                <input type="button" class="calc_btn tile__ctrl__btn" value="3" onclick="javascript:add_calc('calc',3);" />
                <input type="button" class="calc_btn tile__ctrl__btn tile__ctrl--important" value="+" onclick="javascript:f_calc('calc','+');" />

                <input type="button" class="calc_btn tile__ctrl__btn tile__ctrl--double" value="0" onclick="javascript:add_calc('calc',0);" />
                <input type="button" class="calc_btn tile__ctrl__btn" value="," onclick="javascript:add_calc('calc','.');" />
                <input type="button" class="calc_btn tile__ctrl__btn tile__ctrl--important" value="=" onclick="javascript:f_calc('calc','=');" />
            </div>

            <!-- the ledger (history) section of the calculators UI -->
            <ul class="tile__calc__col tile__history"><center><br /><br /><span><i class="fa fa-exclamation-triangle warning large"><br /></i><p class="text-black text-font-warning">Nous sommes désolés mais une erreur est survenue lors du chargement de l'historique !</p></span></center>
            </ul>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
  document.getElementById('calc').onload=initialiser_calc('calc');
</script>
