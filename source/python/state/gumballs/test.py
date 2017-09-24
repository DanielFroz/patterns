import unittest

from design_patterns.source.python.state.gumballs.gumball_machine import GumballMachine


class TestNewGumballMachine(unittest.TestCase):

    def test__new_machine__with_zero_count_balls__has_zero_count(self):
        machine = GumballMachine(0)

        self.assertEqual(0, machine.count)

    def test__new_machine__with_zero_count_balls__has_state_SOLD_OUT(self):
        machine = GumballMachine(0)

        self.assertEqual(GumballMachine.SOLD_OUT, machine.state)

    def test__new_machine__with_one_ball__has_state_NO_QUARTER(self):
        machine = GumballMachine(1)

        self.assertEqual(GumballMachine.NO_QUARTER, machine.state)


class TestGumballMachineInsertQuarter(unittest.TestCase):

    def test__NO_QUARTER__to__HAS_QUARTER(self):
        machine = GumballMachine(1)

        self.assertEqual(GumballMachine.NO_QUARTER, machine.state)

        machine.insert_quarter()

        self.assertEqual(GumballMachine.HAS_QUARTER, machine.state)

    def test__HAS_QUARTER__to__HAS_QUARTER(self):
        machine = GumballMachine(1)
        machine.insert_quarter()

        self.assertEqual(GumballMachine.HAS_QUARTER, machine.state)

        machine.insert_quarter()

        self.assertEqual(GumballMachine.HAS_QUARTER, machine.state)

    def test__(self):
        pass
        # SOLD_OUT
