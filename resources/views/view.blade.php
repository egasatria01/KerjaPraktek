<!DOCTYPE html>
<html>
<head>
    <title>View PDF</title>
</head>
<body>
    {{-- <embed src="{{ asset($view) }}" type="application/pdf" width="100%" height="600px" /> --}}
    <iframe src="{{ route('pdf.show', ['id' => $view->id]) }}" frameborder="0" style="width:100%; height:600px;"></iframe>
</body>
</html>
