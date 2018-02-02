var AppViewModel = function (commentList, userList) {
    //Initializing data
    var self = this;
    this.displayButton = ko.observable(false);
    this.comments = ko.observableArray();
    this.username;
     $.ajax({
        url: "http://localhost/sem4/recept/UserInfo.php",
        async: false,
        dataType: 'json',
        success: function(data) {
            username = data.username;
        }
    });  
    //Giving the array values
    for(var i = 0;i<=commentList.length -1;i++ ){
        
        if(typeof username !=="undefined" && username === userList[i]){
             this.comments.push(new Comment(commentList[i],userList[i],true ));
        }
        else{
             this.comments.push(new Comment(commentList[i],userList[i], false));
        }
    };    
    //Function is called but it cannot define this.comments
      this.deleteComment = function(post_comment, post_username){
        
          self.comments.remove(this);
          $.post("http://localhost/sem4/recept/DeleteComment.php", {
    comment: post_comment,
    username: post_username
});
      }
    
    this.enterComment = function (comment) {
  $.ajax({
        url: "http://localhost/sem4/recept/UserInfo.php",
        async: false,
        dataType: 'json',
        success: function(data) {
            username = data.username;
        }
    });
        
        this.comments.push(new Comment(comment, username,true));
      $.post("http://localhost/sem4/recept/AddComment.php", {
    comment: comment,
    username: username
});
    };
    
  
    
    //OBJECTS
     function Comment(comment, user,bool) {
        var self = this;
        self.comment = ko.observable(comment);
        self.user = ko.observable(user);
         self.display = ko.observable(bool);
    };
};

var commentList = [];
var usernameList = [];
var page = "";
$.ajax({
        url: "http://localhost/sem4/recept/ListHandler.php",
        async: false,
        dataType: 'json',
        success: function(data) {
            for(key in data){
       $.each(data[key], function(key, val) {
           if(key=="comment"){
        commentList.push(val);
           }
           else if(key=="username"){
           usernameList.push(val);
           }
    });
        }
        }
    });

ko.applyBindings(new AppViewModel(commentList, usernameList));

