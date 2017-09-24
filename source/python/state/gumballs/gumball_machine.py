

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
