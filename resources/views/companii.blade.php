<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <style>
    h1 {
        margin-top: 10p;
        margin-left: 80px;
        margin-right: 80px;
        font-family: 'Times New Roman', serif;
        border: 1px solid black;
        padding: 10px;
        border-width: 2px;
    }

    th {
        font-size: 30px;
    }

    td {
        line-height: 3.1;
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>

</head>

<body>
    <h1>Companii</h1>
    <table class="table caption-top  ">
        <caption></caption>
        <thead>
            <tr>
                <th scope="col">1</th>
                <td scope="col">Cisco</td>
                <td scope="col">San Jose, CA, US</td>
                <td scope="col">Information Technology</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">2</th>
                <td>Salesforce</td>
                <td>San Jose, CA, US</td>
                <td>Information Technology</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Hilton</td>
                <td>McLean, VA, US</td>
                <td>Hospitality</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Wegmans Food Markets, Inc,</td>
                <td>Rochester, NY, US</td>
                <td>Retail</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Rocket Companies</td>
                <td>Detrolt, MI, US</td>
                <td>Financial Services & Insurance</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>UKG</td>
                <td>Weston, FL, US</td>
                <td>Information Technology</td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td>Texas Health Resources</td>
                <td>Arlington, TX, US</td>
                <td>Real Estate</td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td>Comden Proprety Trust</td>
                <td>Houstons, TX, US</td>
                <td>Financial Services & Insurance</td>
            </tr>
            <tr>
                <th scope="row">9</th>
                <td>Capital One Financial</td>
                <td>McLean, VA, US</td>
                <td>Financial Services & Insurance</td>
            </tr>
            <tr>
                <th scope="row">10</th>
                <td>Capital One Financial</td>
                <td>New York, NY, US</td>
                <td>Financial Services & Insurance</td>
            </tr>
        </tbody>
    </table>
</body>

</html>