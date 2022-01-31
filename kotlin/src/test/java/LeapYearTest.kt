import org.junit.jupiter.api.BeforeEach
import org.junit.jupiter.api.Test
import org.junit.jupiter.params.ParameterizedTest
import org.junit.jupiter.params.provider.ValueSource
import kotlin.test.assertFalse
import kotlin.test.assertTrue

class LeapYearTest {

    private lateinit var validator: LeapYearValidator;

    @BeforeEach
    fun setup() {
        validator = LeapYearValidator()
    }
    ;
    @ParameterizedTest
    @ValueSource(ints = [4,8,12,16])
    fun `should return true when year is multiple of 4`(year: Int) {
        val isLeapYear: Boolean = validator.isLeapYear(year)

        assertTrue { isLeapYear }
    }

    @Test
    fun `should return false when year is 3`() {
        val isLeapYear: Boolean = validator.isLeapYear(3)

        assertFalse { isLeapYear }
    }

    @Test
    fun `should return false when year is 100`() {
        val isLeapYear: Boolean = validator.isLeapYear(100)

        assertFalse { isLeapYear }
    }

    @Test
    fun `should return true when year is 400`() {
        val isLeapYear: Boolean = validator.isLeapYear(400)

        assertTrue { isLeapYear }
    }
}
