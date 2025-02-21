<?php 
$mainurl="http://localhost/php-examples/calculator/";
$baseurl="http://localhost/php-examples/calculator/assets/";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>calculator app</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/style.css'>
    <link rel="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
    <script href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <script src="<?php echo $baseurl;?>js/calc.js"></script>
</head>

<body>
    <div class="calc w-65 mt-5">
        <table class="" width="85%" border="0">
            <tr>
                <td><input type="text" id="result" placeholder="0" class="form-control"/></td>
            </tr>
            <tr>
                <td>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5" value="%"
                        onclick="return getAllValues(this.value)">%</button>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5"
                        value="CE" onclick="return getAllValues(this.value)">x</button>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5" value="C"
                        onclick="calAll()">C</button>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5" value="X"
                        onclick="slcdata()">X</button>

                </td>
            </tr>

            <tr>
                <td>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5"
                        value="1/x" onclick="return getAllValues(this.value)">1/x</button>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5"
                        onclick="sq()">x<sup>2</sup></button>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5"
                        onclick="sqRoot()">2√x</button>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5" value="/"
                        onclick="return getAllValues(this.value)">/</button>
                </td>
            </tr>


            <tr>
                <td>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5" value="7"
                        onclick="return getAllValues(this.value)">7</button>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5" value="8"
                        onclick="return getAllValues(this.value)">8</button>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5" value="9"
                        onclick="return getAllValues(this.value)">9</button>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5" value="*"
                        onclick="return getAllValues(this.value)">*</button>
                </td>
            </tr>


            <tr>
                <td>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5" value="4"
                        onclick="return getAllValues(this.value)">4</button>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5" value="5"
                        onclick="return getAllValues(this.value)">5</button>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5" value="6"
                        onclick="return getAllValues(this.value)">6</button>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5" value="+"
                        onclick="return getAllValues(this.value)">+</button>
                </td>
            </tr>



            <tr>
                <td>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5" value="1"
                        onclick="return getAllValues(this.value)">1</button>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5" value="2"
                        onclick="return getAllValues(this.value)">2</button>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5" value="3"
                        onclick="return getAllValues(this.value)">3</button>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5" value="-"
                        onclick="return getAllValues(this.value)">-</button>
                </td>
            </tr>


            <tr>
                <td>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5"
                        value="00" onclick="return getAllValues(this.value)">00</button>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5" value="0"
                        onclick="return getAllValues(this.value)">0</button>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5" value="."
                        onclick="return getAllValues(this.value)">.</button>
                    <button type="button" id="btn" class="btn btn-success border border-1 btn-white rounded-5" value="="
                        onclick="finalresult()">=</button>
                </td>
            </tr>

        </table>
    </div>
</body>

</html>