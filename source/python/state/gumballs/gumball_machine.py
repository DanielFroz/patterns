

class GumballMachine:

    SOLD_OUT = 0
    NO_QUARTER = 1
    HAS_QUARTER = 2
    SOLD = 3

    state = SOLD_OUT
    count = 0

    def __init__(self, count):
        self.count = count
        if count > 0:
            self.state = self.NO_QUARTER

    def __str__(self):
        return 'GumballMachine. gumballs_count: {}'.format(self.count)

    def insert_quarter(self):
        if self.state == self.HAS_QUARTER:
            print("You cant insert another quarter")

        elif self.state == self.NO_QUARTER:
            self.state = self.HAS_QUARTER
            print("You insert quarter")

        elif self.state == self.SOLD_OUT:
            print("You cant insert quarter, the machine is sold out")

        elif self.state == self.SOLD:
            print("Please wait, we are already giving you a gumball")

    def eject_quarter(self):
        if self.state == self.HAS_QUARTER:
            print('Quarter returned')
            self.state = self.NO_QUARTER

        elif self.state == self.NO_QUARTER:
            self.state = self.NO_QUARTER
            print('You have not inserted a quarter')

    def turn_crank(self):
        if self.state == self.HAS_QUARTER:
            print('You turned...')
            self.state = self.SOLD
            self.dispense()

    def dispense(self):
        if self.state == self.SOLD:
            print('A gumball comes rolling out the slot')
            self.count -= 1
            if self.count == 0:
                self.state = self.SOLD_OUT
            else:
                self.state = self.NO_QUARTER
