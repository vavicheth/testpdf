<html>
<head>
    <link rel="stylesheet" href="http://assets.annotateit.org/annotator/v1.2.7/annotator.min.css">
</head>
<body>

<div id="content">
    <img src="{{asset('jpg/test.jpg')}}" alt="">
</div>






<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script src="http://assets.annotateit.org/annotator/v1.2.7/annotator-full.min.js"></script>
<script>
    $(function(){

        var annotation = $('#content').annotator();

        annotation.annotator('addPlugin', 'Store', {
            prefix: '/annotation',
            loadFromSearch : {
                page : current_page_id
            },
            annotationData : {
                page : current_page_id
            },
            urls: {
                create:  '/store',
                update:  '/update/:id',
                destroy: '/delete/:id',
                search:  '/search'
            }
        });});
</script>
</body>
</html>
