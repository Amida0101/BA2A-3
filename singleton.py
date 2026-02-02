"""
Singleton Design Pattern Implementation (Python)

Multiple approaches to implement Singleton in Python
"""

# Approach 1: Using a metaclass
class SingletonMeta(type):
    """
    Metaclass for Singleton pattern
    """
    _instances = {}
    
    def __call__(cls, *args, **kwargs):
        if cls not in cls._instances:
            instance = super().__call__(*args, **kwargs)
            cls._instances[cls] = instance
        return cls._instances[cls]


class Singleton(metaclass=SingletonMeta):
    """
    Singleton class using metaclass approach
    """
    
    def __init__(self):
        print("Singleton instance created!")
        self.value = None
    
    def do_something(self):
        print("Singleton is doing something!")


# Approach 2: Using a decorator
def singleton(cls):
    """
    Decorator to make a class a singleton
    """
    instances = {}
    
    def get_instance(*args, **kwargs):
        if cls not in instances:
            instances[cls] = cls(*args, **kwargs)
        return instances[cls]
    
    return get_instance


@singleton
class SingletonDecorator:
    """
    Singleton class using decorator approach
    """
    
    def __init__(self):
        print("SingletonDecorator instance created!")
        self.value = None
    
    def do_something(self):
        print("SingletonDecorator is doing something!")


# Approach 3: Using __new__ method
class SingletonNew:
    """
    Singleton class using __new__ method
    """
    _instance = None
    
    def __new__(cls):
        if cls._instance is None:
            print("SingletonNew instance created!")
            cls._instance = super().__new__(cls)
        return cls._instance
    
    def do_something(self):
        print("SingletonNew is doing something!")


if __name__ == "__main__":
    # Test Approach 1
    print("=== Testing Metaclass Approach ===")
    s1 = Singleton()
    s2 = Singleton()
    print(f"Are both instances the same? {s1 is s2}")
    s1.do_something()
    
    print("\n=== Testing Decorator Approach ===")
    sd1 = SingletonDecorator()
    sd2 = SingletonDecorator()
    print(f"Are both instances the same? {sd1 is sd2}")
    sd1.do_something()
    
    print("\n=== Testing __new__ Approach ===")
    sn1 = SingletonNew()
    sn2 = SingletonNew()
    print(f"Are both instances the same? {sn1 is sn2}")
    sn1.do_something()
