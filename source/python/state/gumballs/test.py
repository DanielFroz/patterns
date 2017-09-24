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
