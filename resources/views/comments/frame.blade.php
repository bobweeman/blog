<div class="portlet" >
    <div class="portlet-heading">
        <h2>Comments</h2>
    </div>
    <div id="bg-primary1" class="panel-collapse collapse in">
        <div class="portlet-body">
            <div class="comment">
                <div >
                    <p> <span class="comment-user">User </span> (19 minutes ago)</p>
                </div>

                <div class="comment-body">
                    I love this!
                </div>
            </div>
            {{--@include('comments.show')--}}
            @include('comments.create')
        </div>
    </div>

</div>