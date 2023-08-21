<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 Email</title>
</head>
<body dir="rtl">
    <h1>من الفورم</h1>
    <p>البيانات :</p>

    <table>
        <tbody>
            <tr>
                <td>الاسم:</td>
                <td>{{$formData['name']}}</td>
            </tr>
            <tr>
                <td>الايميل: </td>
                <td>{{$formData['email']}}</td>
            </tr>
            <tr>
                <td>التيلفون</td>
                <td>{{$formData['tel']}}</td>
            </tr>
            <tr>
                <td>نوع المستلم</td>
                <td>{{$formData['receiverType']}}</td>
            </tr>
            <tr>
                <td>المستلم</td>
                <td>{{ isset($formData['deanship']) ? $formData['deanship'] : $formData['faculty'] }}</td>
            </tr>
            <tr>
                <td>العنوان </td>
                <td>{{$formData['subject']}}</td>
            </tr>
            <tr>
                <td>الموضوع</td>
                <td>{{$formData['body']}}</td>
            </tr>
            {{-- @foreach ($formData as $key => $value)
                <tr>
                    <td>{{$key}}</td>
                    <td>{{ $value }}</td>
                </tr>
            @endforeach --}}
        </tbody>
    </table>
</body>
</html>