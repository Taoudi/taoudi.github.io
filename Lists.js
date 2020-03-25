var AppViewModel = function () {
    var self = this;
    self.friends = ko.observableArray([{name: "Oscar"}, {name: "Maja"}]);
    
    self.members =  ko.observableArray();

    self.memberUI = ko.observable(true);
    
    
    self.showMemberUI = function(){
    self.memberUI(false);
  
    };
    
    self.showNewList = function(){
        self.memberUI(true);
    };
    
    self.addMember = function(){
        self.members.push(new Person(this.name));
        self.friends.remove(this);
    };

    };
//OBJECTS
     function Person(name) {
         var self = this;
        self.name = ko.observable(name);
    };
        

ko.applyBindings(new AppViewModel());
