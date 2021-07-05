
<?php

function printAccount ($account) {
            return print (
                '<table class="table" style="margin-left: 20px;" >
                <thead>
                    <tr>
                    <th scope="col">Kliento nr.:</th>
                    <th scope="col">Vardas:</th>
                    <th scope="col">Pavardė:</th>
                    <th scope="col">Asmens kodas:</th>
                    <th scope="col">Sąskaitos nr.:</th>
                    <th scope="col">Likutis: Eur</th>
                    
                    </tr>
                </thead>
                <tbody>

                    <tr>
                    <td>'.$account['id'].'</td>
                    <td>'.$account['name'].'</td>
                    <td>'.$account['surname'].'</td>
                    <td>'.$account['personalNo'].'</td>
                    <td>'.$account['accNo'].'</td>
                    <td>'.$account['amount'].'</td>
                    </tr>

                </tbody>
                </table>');
                
            }
?>