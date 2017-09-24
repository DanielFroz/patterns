from design_patterns.source.python.state.gumballs.gumball_machine import GumballMachine


if __name__ == '__main__':
    machine = GumballMachine(1)

    print(machine)

    machine.insert_quarter()
    machine.insert_quarter()
    machine.insert_quarter()
    machine.insert_quarter()
