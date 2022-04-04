    <script>
        var discount = document.getElementById('discount').value;
        discount.addEventListener('onchange', function(e) {
            var code = e.target.value;
            console.log(code);
            if (code == 'S4nfs') {
                document.getElementById('code').innerHTML = 'S4nfs';
                document.getElementById('code').style.color = 'green';

                //change $d value
                @php
                $d = ($total * 10) / 100;
                @endphp

            } else {
                document.getElementById('code').innerHTML = 'Invalid';
                document.getElementById('code').style.color = 'red';
                @php
                $d = 0;
                @endphp
            }
        });
    </script>