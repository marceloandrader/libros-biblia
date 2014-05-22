(function() {

  var BookModel = function(data, element) {
    var self = this;
    self.name = ko.observable(data.name || '');
    self.abbr = ko.observable(data.abbr || '');
    self.class_name = ko.observable(data['class'] || '');
  };

  ko.bindingHandlers.book = {
    init: function(element,
    valueAccessor,
    allBindingsAccessor,
    viewModel,
    bindingContext) {
      bindingContext.$root.books.push(new BookModel(valueAccessor()));
    }
  };

  var BooksVM = function() {
    var self = this;
    self.books = ko.observableArray();
    self.selectedBook = ko.observable();
    self.openBook = function() {
      self.selectedBook(self.books()[0]);
    };
  };

  ko.applyBindings(page = new BooksVM);
})();
