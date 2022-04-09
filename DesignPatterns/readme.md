# Design Patterns
- https://refactoring.guru/design-patterns
- https://designpatternsphp.readthedocs.io/en/latest/README.html
- http://www.tutorialspoint.com/design_pattern/abstract_factory_pattern.htm

Design patterns are a toolkit of tried and tested solutions to common problems in software design. 
Design patterns define a common language that you and your teammates can use to communicate more efficiently. 

## Clasifications of patterns

### Creational patterns
Creational patterns provide object creation mechanisms that increase flexibility and reuse of existing code.
#### Factory Method :  
Factory method is a creational design pattern which solves the problem of creating product objects without specifying their concrete classes.Provides an interface for creating objects in a superclass, but allows subclasses to alter the type of objects that will be created.

- Use the Factory Method when you don’t know beforehand the exact types and dependencies of the objects your code should work with.
- The Factory Method separates product construction code from the code that actually uses the product.

#### Abstract Factory
Abstract Factory is a creational design pattern that lets you produce families of related objects without specifying their concrete classes.
 Use the Abstract Factory when your code needs to work with various families of related products, but you don’t want it to depend on the concrete classes of those products—they might be unknown beforehand or you simply want to allow for future extensibility.


#### Builder

#### Prototype
#### Singleton

- Structural patterns explain how to assemble objects and classes into larger structures, while keeping these structures flexible and efficient.
- Behavioral patterns take care of effective communication and the assignment of responsibilities between objects.