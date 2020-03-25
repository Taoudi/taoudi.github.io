var AppViewModel = function () {
    var self = this;
    self.settle = ko.observable(false);
    self.remind = ko.observable(false);
    self.showStandard = ko.observable(true);
    
    self.showSettle = function(){
    self.settle(true);
    };
    self.showRemind = function(){
    self.remind(true);
    };
    
    };
        

ko.applyBindings(new AppViewModel());
