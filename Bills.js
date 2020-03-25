var AppViewModel = function () {
    var self = this;
    self.searchUI = ko.observable(true);
    self.addBill = ko.observable(false);
    self.equally = ko.observable(true);
    self.form = ko.observable(false);
    
    self.showSearch = function(){
        if(self.searchUI() == false){
    self.searchUI(true);
        }
       else if(self.searchUI() == true){
            self.searchUI(false);
        }
    };
    
    self.showAddBill = function(){
        self.addBill(true);
    };
    
    self.notAddBill = function(){
        self.addBill(false);
    };
    
    self.notEqually = function(){
    self.equally(false);
    };
    
    self.Equally = function(){
    self.equally(true);
    };
    
     self.showForm = function(){
    self.form(true);
    };
    self.notForm = function(){
    self.form(false);
    self.equally(false);
    };
    
    };
        

ko.applyBindings(new AppViewModel());
