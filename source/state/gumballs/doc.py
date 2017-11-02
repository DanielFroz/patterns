"""



Паттерн Стратегия
=================


Автомат с Жвачкой
-----------------


Сначала тесты.

    import unittest

    class TestGumballMachine(unittest.TestCase):
    
        def test__new_machine__with_zero_count_balls__has_zero_count(self):
            expected = 0
            machine = GumballMachine(0)
    
            result = machine.count
    
            self.assertEqual(expected, result)
    
        def test__new_machine__with_zero_count_balls__has_state_SOLD_OUT(self):
            expected = GumballMachine.SOLD_OUT
            machine = GumballMachine(0)
    
            result = machine.state
    
            self.assertEqual(expected, result)
    

Напишем реализацию.

    class GumballMachine:
    
        SOLD_OUT = 0
        NO_QUARTER = 1
        HAS_QUARTER = 2
        SOLD = 3
    
        state = SOLD_OUT
        count = 0
    
        def __init__(self, count):
            if count > 0:
                self.state = self.NO_QUARTER

Анализ кода
-----------

### Новые состояния

Код не защищен от добавления новых состояний.
В каждый метод придется добавить новый код для нового состояния.
4 метода, 4 вилки на 1 новое состояние.

- Переходды между состояниями не очевидны, они прячутся в условных конструкциях.
- Не инкапсулировано то, что изменяется, а изменяются набор и количество состояний.


Что если выделить состояние в отдельный класс.
Каждое состояние будет реализовывать свои действия.

Для добавления нового состояния необходимо будет создать новый класс.
И изменить пару переходов.

В большей степени нужно будет писать новый код, чем изменять уже рабочий.

Принципы:

- Инкапсулируй то, что изменяется
- Отдавай предпочтение композиции перед наследованием


"""